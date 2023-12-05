<?php $this->view('includes/header')?>

<div style="margin-left: 285px;" class="table_header" >
        <h1>  Tasks</h1>
</div>



<div class="v_table">
    <div class="v_page_header">
        <h1>Project Task</h1>
    </div>
    <div class="v_table_section">
        <table>
            <thead class="v_thead">
                <tr>
                    <th class="v_data">Task</th>
                    <th class="v_data">Status</th>
                    <th class="v_data">Progress</th>
                    <th class="v_data"></th>
                    <th class="v_data">Allocate</th>
                    <th class="v_data">Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="v_data">Foundation Walls</td>
                    <td class="v_data">Complete</td>
                    <td class="v_data">
                        <div class="progress-bar"  style="width: 300px;">
                            <div class="progress-done" data-value="100" id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data">100%</td>
                    <td class="v_data">
                        <button class="v_action_button" disabled>Allocation</button>
                    </td>
                    <td class="v_data">
                        <button class="v_action_button" disabled>Edit</button>
                    </td>
                </tr>

                <tr>
                    <td class="v_data">Water Proofing</td>
                    <td class="v_data">Ongoing</td>
                    <td class="v_data">
                    <div class="progress-bar"  style="width: 300px;">
                            <div class="progress-done" data-value="60" id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data">60%</td>
                    <td class="v_data">
                        <button class="v_action_button">Allocation</button>
                    </td>
                    <td class="v_data">
                        <button class="v_action_button">Edit</button>
                    </td>
                </tr>

                <tr>
                    <td class="v_data">Reinforcement</td>
                    <td class="v_data">Suspend</td>
                    <td class="v_data">
                    <div class="progress-bar"  style="width: 300px;">
                            <div class="progress-done" data-value="20" id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data">20%</td>
                    <td class="v_data">
                        <button class="v_action_button">Allocation</button>
                    </td>
                    <td class="v_data">
                        <button class="v_action_button">Edit</button>
                    </td>
                </tr>

                <tr>
                    <td class="v_data">Back Filling</td>
                    <td class="v_data">Ongoing</td>
                    <td class="v_data">
                    <div class="progress-bar"  style="width: 300px;">
                            <div class="progress-done" data-value="40" id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data">40%</td>
                    <td class="v_data">
                        <button class="v_action_button">Allocation</button>
                    </td>
                    <td class="v_data">
                        <button class="v_action_button">Edit</button>
                    </td>
                </tr>

                <tr>
                    <td class="v_data">Framing</td>
                    <td class="v_data">Planed</td>
                    <td class="v_data">
                    <div class="progress-bar"  style="width: 300px;">
                            <div class="progress-done" data-value="0" id="progress-done"></div>  
                        </div>
                    </td>
                    <td class="v_data">0%</td>
                    <td class="v_data">
                        <button class="v_action_button">Allocation</button>
                    </td>
                    <td class="v_data">
                        <button class="v_action_button">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
            </div>
        </div>
    </body>
</html>

<?php $this->view('includes/footer'); ?>