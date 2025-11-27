<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function kredit_bee()
	{
		$this->load->view('kredit_bee');
	}

	public function crm_lead_generation_cashback()
	{
		$this->load->view('crm_lead_generation_cashback');
	}
	public function profileDetails()
	{

		if($_POST && $this->input->is_ajax_request()){
			$this->form_validation->set_rules('username', 'Full Name', 'trim|xss_clean|required');
			$this->form_validation->set_rules('useremail', 'Email', 'trim|xss_clean|required');
			$this->form_validation->set_rules('userphone', 'Mobile', 'trim|required|xss_clean|numeric|exact_length[10]');
			$this->form_validation->set_rules('useremployment', 'Employment', 'trim|xss_clean|required');
			if ($this->form_validation->run() == FALSE)
			{
				$reArray = ajaxresmsg('FVE');
			}else{
				$user['name'] = trim($this->input->post('username'));
				$user['email'] = trim($this->input->post('useremail'));
				$user['phone'] = trim($this->input->post('userphone'));
				$user['employment'] = trim($this->input->post('useremployment'));
				$user['created_date'] = date('Y-m-d H:i:s');
				$insertid = $this->crud->data_insert('yp_leads_apply',$user);
				$insert_base_encode = base64_encode('YP'.$insertid.'PY');
				if(!empty($insertid)){
					$reArray = array('status'=>0,'message'=>'Profile Data Updated Successfully','insertid'=>$insert_base_encode,'coupon_code'=>'KBPROL');
				}else{
					$reArray = ajaxresmsg('FVE');
				}
			}
			echo json_encode($reArray);
		}
	}

	public function businessOpportunityInterest()
	{

		if($_POST && $this->input->is_ajax_request()){
			
			$this->form_validation->set_rules('last_insert_id', 'Last Inserted ID', 'trim|xss_clean|required');
			$this->form_validation->set_rules('loan_agent', 'Loan Agent', 'trim|xss_clean|required');
			$this->form_validation->set_rules('Franchise_Business', 'Franchise Business', 'trim|xss_clean|required');
			$this->form_validation->set_rules('Utility_BDP', 'Utility BDP', 'trim|xss_clean|required');
			$this->form_validation->set_rules('PAN_Distributorship', 'PAN Distributorship', 'trim|xss_clean|required');
			$this->form_validation->set_rules('BusinessInterestNone', 'Business Interest None', 'trim|xss_clean|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$reArray = ajaxresmsg('FVE');
			}else{
				$last_insert_id_decode = base64_decode(trim($this->input->post('last_insert_id')));
				$last_insert_id = str_replace("PY","",str_replace("YP","","$last_insert_id_decode"));
				
				$loan_agent = trim($this->input->post('loan_agent'));
				$Franchise_Business = trim($this->input->post('Franchise_Business'));
				$Utility_BDP = trim($this->input->post('Utility_BDP'));
				$PAN_Distributorship = trim($this->input->post('PAN_Distributorship'));
				$BusinessInterestNone = trim($this->input->post('BusinessInterestNone'));

				$full_business_int = array('loan_agent'=>$loan_agent,'Franchise_Business'=>$Franchise_Business,'Utility_BDP'=>$Utility_BDP,'PAN_Distributorship'=>$PAN_Distributorship,'BusinessInterestNone'=>$BusinessInterestNone);
				$full_business_decode = json_encode($full_business_int);

				$udpateid = $this->crud->data_update('yp_leads_apply',array('business_interest'=>$full_business_decode),array('sno'=>$last_insert_id));

				if($udpateid==1){
					$reArray = array('status'=>0,'message'=>'Business Interested Updated Successfully');
				}else{
					$reArray = ajaxresmsg('FVE');
				}
			}
			echo json_encode($reArray);
		}
	}

	public function calculateLoanCashbackReward()
	{

		if($_POST && $this->input->is_ajax_request()){
			
			$this->form_validation->set_rules('loan_amount', 'Loan Amount', 'trim|xss_clean|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$reArray = ajaxresmsg('FVE');
			}else{
				
				$loan_amount = trim($this->input->post('loan_amount'));
				$percent_cashback = $loan_amount*0.005;
				$min_cashBack = min($percent_cashback,1000);
				if(!empty($loan_amount)){
					$reArray = array('status'=>0,'message'=>'Extra Cashback Up to. '.$min_cashBack);
				}else{
					$reArray = ajaxresmsg('FVE');
				}
			}
			echo json_encode($reArray);
		}
	}

	public function cashBackRewards()
	{

		if($_POST && $this->input->is_ajax_request()){
			
			$this->form_validation->set_rules('last_insert_id', 'Last Inserted ID', 'trim|xss_clean|required');
			$this->form_validation->set_rules('loanAmount', 'Loan Amount', 'trim|xss_clean|required');
			
			if ($this->form_validation->run() == FALSE)
			{
				$reArray = ajaxresmsg('FVE');
			}else{
				$last_insert_id_decode = base64_decode(trim($this->input->post('last_insert_id')));
				$last_insert_id = str_replace("PY","",str_replace("YP","","$last_insert_id_decode"));
				
				$loanAmount = trim($this->input->post('loanAmount'));

				$udpateid = $this->crud->data_update('yp_leads_apply',array('loan_cashback'=>$loanAmount),array('sno'=>$last_insert_id));

				$BI_data = $this->crud->fetch_single_data('name,email,phone,business_interest','yp_leads_apply',array('sno'=>$last_insert_id));

				// $to_name = $BI_data->name;
				// $to_email = $BI_data->email;
				// $subject = "Full Details";
				// $message = "Full Message";

				$data['email'] = $BI_data->email;
                $data['name'] = $BI_data->name;
                $data['mobile'] = $BI_data->phone;
                
				getloancompleteemail($data);
				// send_mail($to_email, $subject, $message);
				
				if($udpateid==1){
					$reArray = array('status'=>0,'message'=>'Cashback Successfully Updated','BI_Data'=>json_decode($BI_data->business_interest,true));
				}else{
					$reArray = ajaxresmsg('FVE');
				}
			}
		
			echo json_encode($reArray);
		}
	}
	public function leads_scratch_card()
	{
		$this->load->view('mailer/getloancompleteprocessmail');
	}
	
}