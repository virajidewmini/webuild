<?php

/**
 * pmproject controller
 */
class Pmongoingproject extends Controller
{

	public function index($status)
	{
		if (!Auth::logged_in()) {
			$this->redirect('/login');
		}
		$pmi = Auth::getid();

		$projects = new Projects();
		$data = $projects->where2('manager_id',  $pmi, 'status', $status);


		$this->view('pmongoingproject', [
			'rows' => $data,
		]);
	}

	public function projectdeatils($id = null, $req = null, $mid = null, $model = null)
	{
		// code... 
		if (!Auth::logged_in()) {
			$this->redirect('/login');
		}

		$pmi = Auth::getid();

		$project = new Projects();
		$data = $project->viewProjectDetail($id);

		$allocated_task = new Allocated_tasks();
		$data1 = $allocated_task->where('project_id',$id);
		$data2 = $project->completeTask($id);

		$kitchen = new Kitchen();
		$bathroom = new Bathroom();
		$living = new Living();
		$bedroom = new Bedroom();
		$dining = new Dining();
		$exterior = new Exterior();


		$data3 = $kitchen->where('modification_id', $mid);
		$data4 = $bathroom->where('modification_id', $mid);
		$data5 = $living->where('modification_id', $mid);
		$data6 = $bedroom->where('modification_id', $mid);
		$data7 = $dining->where('modification_id', $mid);
		$data8 = $exterior->where('modification_id', $mid);

		$project_request = new Project_requests();
		$data9 = $project_request->where('id', $req);

		$task = new Tasks();
		$data10 = $task->taskCount($model);
		$data13 = $task->toDoTask($id);

		
		$data11 = $allocated_task->where('project_id', $id);
		$data12 = $allocated_task->totalProgress($id);
		$data19 = $allocated_task->AllowTask($id);

		$allocated_co = new AllocateCoworker();
		$data15 = $allocated_co->where('project_id', $id);

		$material_requests = new Material_requests();
		$quotations = new QuotationSK();
		$data20 = $material_requests->getMaterialRequest($id);
		$data21 = $quotations->getMaterialQ($id, 'Sent');
		$data22 = $quotations->getMaterialQ($id, 'Received');
		$data16 = $material_requests->remaining_req($id);


		$complaint = new C_Complaint();
		$data17 = $complaint->man_viewComplanit_noty($pmi, $id);

		$report = new ProgressReport();
		$data18 = $report->viewReport($pmi);



		$this->view('pmprojectprofile', [
			'rows' => $data,
			'rows1' => $data1,
			'rows2' => $data2,

			'rowk' => $data3,
			'rowba' => $data4,
			'rowl' => $data5,
			'rowbe' => $data6,
			'rowd' => $data7,
			'rowe' => $data8,

			'row3' => $data9,
			'row4' => $data10,
			'row5' => $data11,
			'row6' => $data12,
			'row7' => $data13,
			'row9' => $data15,
			'row10' => $data16,
			'rows17' => $data17,
			'rows18' => $data18,
			'rows19' => $data19,
			'rows5' => $data20,
			'rows3' => $data21,
			'rows4' => $data22,
			'project_id' => $id,
		]);
	}

	//accept complete task
	public function AcceptTask($p_id, $t_id)
	{

		$allocated_task = new Allocated_tasks();
		$allocated_task->PMAcceptTask($p_id, $t_id);
		echo '<script>window.history.back();</script>';
	}
	public function RejectTask($p_id, $t_id)
	{

		$allocated_task = new Allocated_tasks();
		$allocated_task->PMRejectTask($p_id, $t_id);
		echo '<script>window.history.back();</script>';
	}
}
