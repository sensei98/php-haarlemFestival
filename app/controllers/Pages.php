<?php
class Pages extends Controller
{

    // public function __construct()
    // {
    //     $this->JazzModel = $this->model('JazzModel');
    // }

    // public function index()
    // {
    //     $topArtists = $this->JazzModel->getTopArtists();
    //     $data = array($topArtists);
    //     $this->view('jazz/jazzhomepage', $data);
    // }

    // public function tickets()
    // {
    //     $topArtists = $this->JazzModel->getAllJazzTickets();
    //     $data = array($topArtists);
    //     $this->view('jazz/jazztickets');
    // }


    // public function index(){
    //     $tickets = $this->JazzModel->getAllJazzTickets();
    //     $data = array($tickets);
    //     $this->view("jazz/jazztickets",$data);
    // }




    // public function index() {
    //     $topArtists = $this->JazzModel->getAllJazzTickets();
    //     $data = array($topArtists);
    //     $this->view('jazztickets',$data);
    // }
    // public function index(){
    //     $result = $this->JazzModel->getAllJazzTickets();
    //     $data = [];
    //     foreach($result as $row){
    //     $data = array('artistname'=>$row->artistname, 'location'=>$row->location, 'hall'=>$row->hall,
    //               'price'=>$row->price, 'timefrom'=>$row->timefrom, 'timeto'=>$row->timeto, 'about'=>$row->about);
    //             }
    //     $this->view('jazztickets',$data);
    // }

    // public function index()
    // {
    //     $result = $this->JazzModel->getAllJazzTickets();
    //     $data = [];
    //     foreach ($result as $row) {
    //         $data = array(
    //             'artistname' => $row->artistname, 'location' => $row->location, 'hall' => $row->hall,
    //             'price' => $row->price, 'timefrom' => $row->timefrom, 'timeto' => $row->timeto, 'about' => $row->about
    //         );
    //     }
    //     $this->view('jazz/jazztickets', $data);
    // }

    // public function about() {
    //     $data = [
    //         'title' => 'About Me'
    //     ];

    // $this->view('pages/about', $data);
    // }

}
