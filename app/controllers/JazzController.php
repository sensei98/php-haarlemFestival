<?php
class JazzController extends Controller
{

    // public function __construct()
    // {
    //     $this->JazzModel = $this->model('JazzModel');
    // }

    public function getJazzTickets()
    {
        $data1 = $this->JazzModel->getAllJazzTickets();
        //$data = array($tickets);
        $this->view('jazz/jazztickets', $data1);
    }



    // public function getJazzArtistsByID($id)
    // {
    //     $ticket = $this->JazzModel->getJazzArtistsByID($id);
    //     $data = array($ticket);

    //     $this->view('jazz/jazztickets', $data);
    // }



    // public function getTopArtists(){
    //     $topArtists = $this->JazzModel->getTopArtists();
    //     $data = array($topArtists);

    //     $this->view('jazzhomepage',$data);
    // }

    // public function getTopArtists(){
    //     $result = $this->jazzmodel->getTopArtists();
    //     $data = [];
    //     foreach($result as $row){
    //         $data = array('artistImage'=>$row->topArtists.image, 'artistName'=>$row->tickets.artistname, 'aboutTickets'=>$row->tickets.about);
    //     }
    //     $this->view('jazzhomepage',$data);

    // }
}
