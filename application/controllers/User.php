<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
	    $this->load->model('M_users');
	    $this->load->library('Zend');
      $this->zend->load('Zend/Barcode');
      $this->load->library('email');
	}

	public function index(){
		  $this->load->view('page_filldata');
	}

	public function result(){
		$this->load->view('result_page');
	}


  function do_insert(){
		$this->load->library('Zend');
    $this->zend->load('Zend/Barcode');

		$data = array(
			'name' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'no_hp' => $this->input->post('nohp'),
			'tgl_lahir' => $this->input->post('tglahir'),
			'alamat' => $this->input->post('alamat'),
			'no_iden' => $this->input->post('noiden'),
      'unix_code' => time(),
      'created' => date('Y-m-d H:i:s'),
			'modified' => date('Y-m-d H:i:s')
		);

    $data['barcode'] = $this->generate_barcode();
    //var_dump($data);die;
          

          //$barName=$data['name'];
          //$this->set_barcode($barName,$data);

          $this->M_users->insert_user($data);

    $file = Zend_Barcode::draw('Code128', 'image', array('text' => $data['barcode']), array("horizontalPosition" => "center", "verticalPosition" => "middle"));

    $store_image = imagepng($file,"./barcode/{$data['barcode']}.png");
    $id = $data['unix_code'];
    redirect(base_url()."user/ticket/".$id);
          //return false;

	}

  public function generate_barcode()
  {
    $valid = 0;

    while($valid != 1){
      $barcode  = str_pad(mt_rand(1,999999), 6, '0', STR_PAD_LEFT);
      $check    = $this->M_users->check($barcode);
      if($check == 0){
        $valid = 1;
      }
    }

    return $barcode;
  }

  public function ticket($id){
    $this->load->library('zend');
    $this->zend->load('Zend/Barcode');
    $data = $this->M_users->get_user_data($id);
    //var_dump($data);
    if(empty($data)){
      echo "<script>alert('Data tidak ditemukan!');window.location.href = '".base_url()."';</script>";
    }else{
      $this->topdf($data[0]);
    }
  }

  
   public function set_barcode($barName,$data)
    {
       $this->load->library('zend');
       $this->zend->load('Zend/Barcode');

       $Unix = $data['unix_code'];


       $file = Zend_Barcode::draw('Ean13', 'image', array('text' => $Unix), array("horizontalPosition" => "center", "verticalPosition" => "middle"));

       $datunix = 0 . $Unix;

       $name = $data['name'];
       $unix_code = $data['unix_code'];



       $barUnix = $datunix . $barName;

       $store_image = imagepng($file,"./barcode/{$barUnix}.png");
       $this->topdf($barName,$barUnix,$data);


    }
  
    //public function topdf($barUnix,$barName,$data){
    public function topdf($data){
      require_once(APPPATH.'libraries/Fpdf.php');

      //$pdf = new FPDF();
      $pdf = new FPDF('L','mm',array(235,135));

      $pdf->SetDisplayMode('real', 'single');

      //$barUnix = 0 . time().$barUnix;

      $pdf->AddPage();
      $pdf->GetPageHeight(30);

      //HEADER
      $pdf->SetDrawColor(158,158,158);
      $pdf->SetFillColor(158,158,158);
      $pdf->Rect(5,10,220,20,'DF');

      //$file_barcode = $_SERVER["DOCUMENT_ROOT"]."/ultimatechallengercti28/barcode/{$barUnix}.png";
      $file_barcode = $_SERVER["DOCUMENT_ROOT"]."/ultimatechallengercti28/barcode/{$data['barcode']}.png";
      $pdf->Image($file_barcode,75,90,70,35,'PNG');

      $orderdate = $data['created'];
      $hasil_orderdate = date('d-m-Y',strtotime($orderdate));

      //HEADER
      $pdf->SetFont('Arial','',12);
      $pdf->SetTextColor(250,250,250);
      $pdf->SetXY(10,15);
      $pdf->Write(5,'EVENT');

      $pdf->SetXY(90,15);
      $pdf->Write(5,'LOCATION');

      $pdf->SetXY(130,15);
      $pdf->Write(5,'ORDER DATE');

      //ISI HEADER
      $pdf->SetFont('Arial','',12);
      $pdf->SetTextColor(0,0,0);
      $pdf->SetXY(10,22);
      $pdf->Write(5,'ULTIMATE CHALLENGE 2017');

      $pdf->SetXY(90,22);
      $pdf->Write(5,'ANCOL');

      $pdf->SetXY(130,22);
      $pdf->Write(5,$hasil_orderdate);

      // JUDUL DATA
      $pdf->SetFont('Arial','',10);
      $pdf->SetXY(110,35);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetXY(110,45);
      $pdf->Write(5,'NAMA              :');

      $pdf->SetXY(110,55);
      $pdf->Write(5,'NO.IDENTITAS			 :');

      //=======
      $pdf->SetXY(145,35);
      $pdf->SetTextColor(0,0,0);

      $pdf->SetXY(145,45);
      $pdf->Write(5,$data['name']);
      //$pdf->Write(5,$data['name']);

      $pdf->SetXY(110,60);
      $pdf->Write(5,$data['no_iden']);
      //$pdf->Write(5,$data['no_iden']);


      //$pathbarcode = "./files/{$barUnix}.pdf";

      //$pdf->Output($pathbarcode,'F');
      $pdf->Output();
      $pdf->Close();

    }


}


?>
