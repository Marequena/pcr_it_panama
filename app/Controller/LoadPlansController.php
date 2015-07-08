<?php
class LoadPlansController extends AppController {
 

    		public function beforeFilter() {
		parent::beforeFilter();

		
		$this->Auth->allow();
	}

    
	public $components = array('Session');
	
	public $name = 'LoadPlans';
    
        public $sessioncar= array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0);
        
        public $sessionplan= array('raillenght' => 0, 'carsfull' => 0, 'carsempty' => 0, 'carstotal' => 0, 'totalwght' => 0, 'cntrfull' => 0, 'cntrempty' => 0, 'cntrtotal' => 0);
        
        public $arrayCars = array('1cars'=>array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0));
	public $Plans = array(
        'plans_id',
        'stackcars_id',
        'topan11',
        'topan12',
        'topan2'
    );
	var $uses = array('Plan','plan_cars','Locomotive','stackcars','importdatafile');

	var $paginate = array(
	'limit' => 5,
	'order' => array(
	'ID' => 'asc'
	)
	);
	
	
	 
	 
	public function index() {
		$params = array('joins' => array( 
                        array( 
                            'table' => 'plancars', 
                            'alias' => 'plancars', 
                            'type' => 'inner',  
                            'conditions'=>array ('plancars.plans_id = id '))));		
		//$this->set('plans', $this->Plan->find('all'));
		$data = $this->paginate('Plan');
		$this->set(compact('plans'));
		$this->set('plans', $data);
	}

	public function newloadplan() {
            //pr($this->request->data);
            
                $this->arrayCars=$this->arrayCars+array('2cars'=>array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0));
                $this->arrayCars=$this->arrayCars+array('3cars'=>array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0));
                $this->arrayCars=$this->arrayCars+array('4cars'=>array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0));
                $this->arrayCars=$this->arrayCars+array('5cars'=>array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0));
                $this->arrayCars=$this->arrayCars+array('6cars'=>array('stackcars_id' => '', 'topan2' => '', 'topan11' => '', 'topan12' => '', 'topamsg' => '', 'topawght' => 0, 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topbmsg' => '', 'topbwght' => 0, 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topcmsg' => '', 'topcwght' => 0, 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topdmsg' => '', 'topdwght' => 0, 'topen11' => '', 'topen12' => '', 'topen2' => '', 'topemsg' => '', 'topewght' => 0, 'cntr20' => 0, 'cntr40' => 0, 'cntrfull' => 0, 'cntrempty' => 0));
                
		$this->set('locomotives', $this->Locomotive->find('list', array(
				'fields' => array('ID', 'description'),
				'recursive' => 0
			)));
		$this->set('cars', $this->stackcars->find('list', array(
				'fields' => array('ID', 'description'),
				'recursive' => 0
			)));
                $v=$this->Session->read('arrayCars');
                //'antes');
                        if (isset($v)) {
                        $this->arrayCars=$this->Session->read('arrayCars');
                        //pr("session");
                    } else
                    {
//                        //pr($_SESSION['stackcar']);
//                        $stackcar = $_SESSION['stackcar'];
                        $this->sessioncar=  $this->Session->read('stackcar');
//                        $stackcar =$this->sessioncar;
                    }


                 
                $Ton=0;
		$mensage_info="";
                //cambiarlo
		if(isset($this->request->data['SCar']))
		{
			$exists=$this->stackcars->find('all',array('conditions'=>array('id ='=>$this->request->data['SCar']['stackcars_id'])));
			if(!isset($exists[0]['stackcars']['ID']))
				$mensage_info='Please select Stack Car.';
			else
			{
				$Ton=$exists[0]['stackcars']['Ton'];
				$stackcar['stackcars_id']=$exists[0]['stackcars']['ID'];
			}
		}
		

		
		
		if(isset($this->request->data['CNTRA']))
		{
			$ton2=0;
			$ton11=0;
			$ton12=0;
			$type2=0;
			$type11=0;
			$type12=0;
                        $fila=$this->request->data['CNTRA']['numcar'];
                        $letra='a';
                        if($this->request->data['CNTRA']['numcol']==1)
                            $letra='a';
                        if($this->request->data['CNTRA']['numcol']==2)
                            $letra='b';
                        if($this->request->data['CNTRA']['numcol']==3)
                            $letra='c';
                        if($this->request->data['CNTRA']['numcol']==4)
                            $letra='d';
                        if($this->request->data['CNTRA']['numcol']==5)
                            $letra='e';

                        $exists=$this->importdatafile->find('all',array('conditions'=>array('container ='=>$this->request->data['CNTRA']['cntrN2'])));
                        if($this->request->data['CNTRA']['cntrN2'])
                        {
                            if($exists)
                            {
                                    if(!isset($exists[0]['importdatafile']['container']))
                                            $mensage_info='El numero de contenedor no es valido por  favor verifique.';
                                    else 
                                    {
                                            if (!in_array($exists[0]['importdatafile']['container'], $this->arrayCars[$fila.'cars'])) {
                                                    $mensage_info= 'El contenedor ya esta siendo utilizado en otra seccion del tren1';
                                            }
                                            else
                                            {
                                                
                                                
                                                        $this->arrayCars[$fila.'cars']['top'.$letra.'n2']=$exists[0]['importdatafile']['container'];
                                                    if($exists[0]['importdatafile']['size']==20)
                                                            $mensage_info='El contenedor de la seccion TOP A, no puede ser de 20 pies.';
                                            }
                                    }
                            }
                            else
                                    $mensage_info='El numero de contenedor no es valido por  favor verifique.';
                        $this->set('mensage_info',$mensage_info);
                        }
                        

			
			
			$exists=$this->importdatafile->find('all',array('conditions'=>array('container ='=>$this->request->data['CNTRA']['cntrN11'])));
			if($exists)
			{
				if(!isset($exists[0]['importdatafile']['container']))
					$mensage_info='El numero de contenedor no es valido por  favor verifique.';
				else 
				{
					if (!in_array($exists[0]['importdatafile']['container'], $this->arrayCars[$fila.'cars'])) {
						$mensage_info= 'El contenedor ya esta siendo utilizado en otra seccion del tren2';
					}
					else
					{
                                                           
                                                            $this->arrayCars[$fila.'cars']['top'.$letra.'n11']=$exists[0]['importdatafile']['container'];
					}
				}
			}
			else
				$mensage_info='El numero de contenedor no es valido por  favor verifique.';
			
			$exists=$this->importdatafile->find('all',array('conditions'=>array('container ='=>$this->request->data['CNTRA']['cntrN12'])));
			if($exists)
			{
				if(!isset($exists[0]['importdatafile']['container']))
					$mensage_info='El numero de contenedor no es valido por  favor verifique.';
				else 
				{
					if (!in_array($exists[0]['importdatafile']['container'], $this->arrayCars[$fila.'cars'])) {
						$mensage_info= 'El contenedor ya esta siendo utilizado en otra seccion del tren3';
					}
					else
					{   
                                                        $this->arrayCars[$fila.'cars']['top'.$letra.'n12']=$exists[0]['importdatafile']['container'];
					}
				}
			}
			else
				$mensage_info='El numero de contenedor no es valido por  favor verifique.';
			
                        //pr($this->arrayCars);       
			if($this->arrayCars[$fila.'cars']['top'.$letra.'wght']>55)
				$mensage_info='El peso de la carga supera las 55 Ton.';
			if(($type11==20 and $type12==40) or ($type11==40 and $type12==20))
				$mensage_info='Bottom A  dos contenedores de distintos tamaños, por favor verificar.';
			if(($type11==40 and $type12==40))
				$mensage_info='Bottom A no puede poseer  dos contenedores de 40 pies.';
                        
                        
                }
                        for ($i = 1; $i < 7; $i++) {
                            
                            for ($n = 1; $n < 6; $n++) {
                                $letra='a';
                                if($n==1)
                                    $letra='a';
                                if($n==2)
                                    $letra='b';
                                if($n==3)
                                    $letra='c';
                                if($n==4)
                                    $letra='d';
                                if($n==5)
                                    $letra='e';
                                $this->arrayCars[$i.'cars']['top'.$letra.'wght']=0;
                                $this->arrayCars[$i.'cars']['top'.$letra.'msg']='';
                                
                                $exists=$this->importdatafile->find('all',array('conditions'=>array('container ='=>$this->arrayCars[$i.'cars']['top'.$letra.'n2'])));
                                if($exists)
                                {
                                        if(isset($exists[0]['importdatafile']['container']))
                                        {
                                            $this->sessionplan['cntrtotal']=$this->sessionplan['cntrtotal']+1;
                                            if($exists[0]['importdatafile']['f/e']=='F')
                                                $this->sessionplan['cntrfull']=$this->sessionplan['cntrfull']+1;
                                            else 
                                                $this->sessionplan['cntrempty']=$this->sessionplan['cntrempty']+1;
                                            
                                            $this->arrayCars[$i.'cars']['top'.$letra.'wght']=$this->arrayCars[$i.'cars']['top'.$letra.'wght']+($exists[0]['importdatafile']['wght']/1000);
                                            $this->arrayCars[$i.'cars']['top'.$letra.'msg']=$this->arrayCars[$i.'cars']['top'.$letra.'msg'].$exists[0]['importdatafile']['container']." - ".($exists[0]['importdatafile']['wght']/1000)." Ton \n " ;
                                            
                                        }
                                }
                                $exists=$this->importdatafile->find('all',array('conditions'=>array('container ='=>$this->arrayCars[$i.'cars']['top'.$letra.'n11'])));
                                if($exists)
                                {
                                        if(isset($exists[0]['importdatafile']['container']))
                                        {
                                            $this->sessionplan['cntrtotal']=$this->sessionplan['cntrtotal']+1;
                                            if($exists[0]['importdatafile']['f/e']=='F')
                                                $this->sessionplan['cntrfull']=$this->sessionplan['cntrfull']+1;
                                            else 
                                                $this->sessionplan['cntrempty']=$this->sessionplan['cntrempty']+1;

                                            $this->arrayCars[$i.'cars']['top'.$letra.'wght']=$this->arrayCars[$i.'cars']['top'.$letra.'wght']+($exists[0]['importdatafile']['wght']/1000);
                                            $this->arrayCars[$i.'cars']['top'.$letra.'msg']=$this->arrayCars[$i.'cars']['top'.$letra.'msg'].$exists[0]['importdatafile']['container']." - ".($exists[0]['importdatafile']['wght']/1000)." Ton \n " ;

                                        }
                                }
                                $exists=$this->importdatafile->find('all',array('conditions'=>array('container ='=>$this->arrayCars[$i.'cars']['top'.$letra.'n12'])));
                                if($exists)
                                {
                                        if(isset($exists[0]['importdatafile']['container']))
                                        {
                                            $this->sessionplan['cntrtotal']=$this->sessionplan['cntrtotal']+1;
                                            if($exists[0]['importdatafile']['f/e']=='F')
                                                $this->sessionplan['cntrfull']=$this->sessionplan['cntrfull']+1;
                                            else 
                                                $this->sessionplan['cntrempty']=$this->sessionplan['cntrempty']+1;
                                            
                                            $this->arrayCars[$i.'cars']['top'.$letra.'wght']=$this->arrayCars[$i.'cars']['top'.$letra.'wght']+($exists[0]['importdatafile']['wght']/1000);
                                            $this->arrayCars[$i.'cars']['top'.$letra.'msg']=$this->arrayCars[$i.'cars']['top'.$letra.'msg'].$exists[0]['importdatafile']['container']." - ".($exists[0]['importdatafile']['wght']/1000)." Ton \n " ;

                                        }
                                }
                                
                                
                            }
                        }        

		
		
		
        $this->set('arrayCars',$this->arrayCars);
        $this->set('sessionplan',$this->sessionplan);
        // pr($this->sessionplan);
        $this->Session->write('arrayCars',$this->arrayCars);
        $this->Session->write('sessionplan',$this->sessionplan);
        //$this->sessioncar=$stackcar;
                //pr($this->arrayCars);
        //pr($this->Session->read('arrayCars'));
	 if(isset($_POST["Addcar"]))
         {
                
		if(!isset($_SESSION['stackcars_plan']))
			$stackcars_plan=array('stackcar'=>$stackcar);
		else
			$stackcars_plan=$stackcars_plan+array('stackcar'=>$stackcar);
        
                $this->set('cars', $stackcars_plan);
		//pr($stackcars_plan);         
         }

        }
	public function addcarplan() {
		//pr($this->request->data);

		if(!isset($_SESSION['stackcars_plan']))
			$stackcars_plan=array('stackcar'=>$_SESSION['stackcar']);
		else
			$stackcars_plan=$stackcars_plan+array('stackcar'=>$_SESSION['stackcar']);
		//pr($stackcars_plan);
		if ($this->request->is('post')) {
			
			$stackcar=$this->request->data['stackcar'];
			$this->Plan->create();
			
			if ($this->Plan->saveAll($this->request->data)) {
				$plan_id=$this->Plan->getLastInsertId();
				
				foreach ($this->request->data['plan_cars'] as $i){
					
					$i=array("plans_id"=>$plan_id) + $i; 
					//pr($i);
					$i['plan_id']=$plan_id;
					$this->plan_cars->create();
					$this->plan_cars->save($i);
				}
				$this->Session->setFlash('Your LoadPlan has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your LoadPlan.');
			}
		}
	}

	
	public function saveloadplan() {
		$this->set('locomotives', $this->Locomotive->find('list', array(
				'fields' => array('ID', 'description'),
				'recursive' => 0
			)));
		$this->set('stackcars', $this->stackcars->find('list', array(
				'fields' => array('ID', 'description'),
				'recursive' => 0
			)));

		$stackcar = array('stackcars_id' => '', 'topan11' => '', 'topan12' => '', 'topan2' => '', 'topbn11' => '', 'topbn12' => '', 'topbn2' => '', 'topcn11' => '', 'topcn12' => '', 'topcn2' => '', 'topdn11' => '', 'topdn12' => '', 'topdn2' => '', 'topen11' => '', 'topen12' => '', 'topen2' => '');

        $this->set('stakcar', $stackcar);

		//pr($this->request->data);
		//pr($stackcar);
		if ($this->request->is('post')) {
			$stackcar=$this->request->data['stackcar'];
			$this->Plan->create();
			
			if ($this->Plan->saveAll($this->request->data)) {
				$plan_id=$this->Plan->getLastInsertId();
				
				foreach ($this->request->data['plan_cars'] as $i){
					
					$i=array("plans_id"=>$plan_id) + $i; 
					//pr($i);
					$i['plan_id']=$plan_id;
					$this->plan_cars->create();
					$this->plan_cars->save($i);
				}
				$this->Session->setFlash('Your LoadPlan has been saved.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to add your LoadPlan.');
			}
		}
	}

	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid LoadPlan'));
		}

		$this->LoadPlan->contain(array('Detail' => array('Foreign' =>
		array('fields' => array('id', 'name')))));
		debug($LoadPlan = $this->LoadPlan->findById($id));
		$this->set('details', $LoadPlan['Detail']);
		if (!$LoadPlan) {
			throw new NotFoundException(__('Invalid LoadPlan'));
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$this->LoadPlan->id = $id;
			if ($this->LoadPlan->save($this->request->data)) {
				$this->Session->setFlash('Your LoadPlan has been updated.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Unable to update your LoadPlan.');
			}
		}

		if (!$this->request->data) {
		$this->request->data = $LoadPlan;
		}
	}
	
	function autoComplete(){
        if ( $this->RequestHandler->isAjax() ) {
            Configure::write ( 'debug', 0 );
            $this->autoRender=false;
            $users=$this->importdatafile->find('all',array('conditions'=>array('container LIKE'=>'%'.$_GET['term'].'%')));
                $i=0;
                foreach($users as $user){
                    $response[$i]['value']=$user['importdatafile']['container'];
                $i++;
                }
            echo json_encode($response);
        }else{
            if (!empty($this->data)) {
                $this->set('importdatafiles',$this->paginate(array('container LIKE'=>'%'.$this->data['importdatafile']['container'].'%')));
            }
        }
    }	
	
}
