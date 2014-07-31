<?php

App::uses('AppController', 'Controller');

/**
 * States Controller
 *
 * @property State $State
 * @property PaginatorComponent $Paginator
 * @property RequestHandlerComponent $RequestHandler
 */
class StatesController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator', 'RequestHandler');

    //Contoh 1
    //http://localhost/jsonstates/states.json
    //Normal index http://localhost/jsonstates/states
    public function index() {

        //$states = $this->State->find('all');          
        $this->set(array(
            //'states' => $states,
            'states' => $this->Paginator->paginate(),
            '_serialize' => array('states')
        ));
    }

    //Contoh 2
    //http://localhost/jsonstates/states/data.json
    function data() {
        #if ($this->request->is('ajax'))://hanya allow request dari ajax code sahaja... jika direct access, data blank
        $states = $this->State->find('all');
        $result = array();
        foreach ($states as $x => $state) {
            $result[$x]['id_negeri'] = $state['State']['id'];
            $result[$x]['nama_negeri'] = $state['State']['name'];
        }
        echo json_encode($result);
        exit();
        #endif;
        $this->autoRender = false;
    }

    //normal index
    public function senarai() {
        $this->State->recursive = 0;
        $this->set('states', $this->Paginator->paginate());
    }

}
