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

		$project = new Projects();
		$data = $project->viewProjectDetail($id);

		$data1 = $project->ongoingTask($id);
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

		$allocated_task = new Allocated_tasks();
		$data11 = $allocated_task->where('project_id', $id);
		$data12 = $allocated_task->totalProgress($id);
		$data14 = $allocated_task->pendingTask($id);

		$allocated_co = new AllocateCoworker();
		$data15 = $allocated_co->where('project_id', $id);

		$project_material_quatation = new Project_material_quatation();
		$data16 = $project_material_quatation->where2('project_id', $id, 'status', 'Remaining');

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
			'row8' => $data14,
			'row9' => $data15,
			'row10' => $data16,
		]);
	}

	public function acceptTask($id)
	{
		if (!Auth::logged_in()) {
			$this->redirect('/login');
		}

		$allocated_task = new Allocated_tasks();
		$arr['status'] = 'Done';
		$allocated_task->update($id, $arr);
	}
}
