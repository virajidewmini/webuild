<?php if(Auth::getRole()== 'Project Coordinator'): ?>
<?php $this->view('includes/header')?>

 <div class="project-details">
        <div class="table_header">
            <h3>Projects</h3>
        </div>
        <div class="project">
            <a href="<?=ROOT?>/Pmongoingproject"
            style="text-decoration:none">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/on_pro.png');">
                    <h1>Ongoing</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cm_pro.png');">
                    <h1>Completed</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right"></i>
                </div>
            </div>
            </a>
            <a href="<?=ROOT?>/Pmongoingproject">
            <div class="pro">
                <div class="pro-body" style="background-image: url('<?=ROOT?>/img/cn_pro.png');">
                    <h1>Canceled</h1>
                </div>
                <div class="pro-bottom">
                    More<i class="fa-solid fa-arrow-right" style="padding-left: 4px;"></i>
                </div>
            </div>
            </a>
        </div>
    </div>



    <!-- Terminate project requests or projects -->
    <?php if($rows['terminate']):?>
<!-- <pre><?php print_r($rows['terminate']);?></pre> -->
        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3> To TERMINATE </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Project / Project Request</th>
                            <th>Installment Number</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Notify User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows['terminate'] as $row) :?>
                        
                            <tr>                       
                                <td><?php if($row->installement_number == 1):?><?=$row->project_request_id?><?php elseif($row->installement_number >1):?><?=$row->project_id?><?php endif;?></td>
                                <td><?php if($row->installement_number == 1):?>Proect Request<?php elseif($row->installement_number >1):?>Project<?php endif;?></td>
                                <!-- <td><?=$row->user->firstname?> <?=$row->user->lastname?></td> -->
                                <td><?=$row->installement_number?></td>  
                                <td><?=$row->amount?></td>       
                                <td><?=$row->date?></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatordashboard/Terminationnotify/<?=$row->user_id?>/<?=$row->amount?>/<?=$row->installement_number?>/<?=$row->date?>/<?=$row->id?>">
                                        <button><i class="fa-solid fa-bell" style="color: #e67f1e;"></i></button>
                                    </a>
                                </td>
                            
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
        <?php else:?>
        <h4>Nothing to TERMINATE</h4>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
        <?php endif;?>


    <!-- warning payments -->
    <?php if($rows['payments']):?>

        <div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3> Payments Warning Reminders on Projects </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>User Name</th>
                            <th>Installment Number</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Notify User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows['payments'] as $row) :?>
                        
                            <tr>                       
                                <td><?=$row->project_id?></td>
                                <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                                <td><?=$row->installement_number?></td>  
                                <td><?=$row->amount?></td>       
                                <td><?=$row->date?></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatordashboard/warningnotify/<?=$row->user_id?>/<?=$row->amount?>/<?=$row->installement_number?>/<?=$row->date?>/<?=$row->id?>">
                                        <button><i class="fa-solid fa-bell" style="color: #e67f1e;"></i></button>
                                    </a>
                                </td>
                            
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Warning Payments are found</h4>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
    <?php endif;?>

    

    <div class="table_header">
            <h3>Best Ratings</h3>
    </div>
    <div class="ratings-container" style="max-width: 1300px; margin: 20px auto; display: flex; flex-wrap: wrap;">
    <script>
      function createStars(numStars) {
        let starsHtml = '';
        for (let i = 0; i < numStars; i++) {
          starsHtml += '<span class="star" style="color: gold;">&#9733;</span>';
        }
        return starsHtml;
      }

      // Example ratings data (replace this with your actual data)
      const ratingsData = [
  <?php foreach ($rows["ratings"] as $row) :?>
    { 
      stars: <?=$row->number_of_stars?>, 
      message: "<?=$row->review?>", // Wrap PHP variables in quotes to treat them as strings
      customer: "<?=$row->firstname?> <?=$row->lastname?>" // Similarly, wrap user_id in quotes
    },
  <?php endforeach; ?>
  // Add more rating objects as needed
];


      

      // Function to generate the ratings UI
      function generateRatingsUI() {
        ratingsData.forEach(rating => {
          const ratingDiv = document.createElement('div');
          ratingDiv.classList.add('rating');
          ratingDiv.style.backgroundColor = '#fff';
          ratingDiv.style.borderRadius = '5px';
          ratingDiv.style.padding = '10px';
          ratingDiv.style.marginRight = '10px'; // Adjust margin as needed
          ratingDiv.style.boxShadow = '0 2px 5px rgba(0, 0, 0, 0.1)';
          ratingDiv.style.width = 'calc(33% - 20px)'; // Adjust width for equal spacing

          const starsHtml = createStars(rating.stars);
          const messageDiv = document.createElement('div');
          messageDiv.classList.add('message');
          messageDiv.style.fontSize = '16px'; // Adjust font size as needed
          messageDiv.style.minHeight = '40px'; // Set minimum height for message
          messageDiv.innerHTML = `"${rating.message}"`;

          const customerDiv = document.createElement('div');
          customerDiv.classList.add('customer');
          customerDiv.style.fontSize = '14px'; // Adjust font size as needed
          customerDiv.style.fontStyle = 'italic';
          customerDiv.style.color = '#666';
          customerDiv.innerText = `- ${rating.customer}`;

          ratingDiv.innerHTML = `<div class="stars">${starsHtml}</div>`;
          ratingDiv.appendChild(messageDiv);
          ratingDiv.appendChild(customerDiv);

          document.querySelector('.ratings-container').appendChild(ratingDiv);
        });
      }

      // Generate the ratings UI on page load
      generateRatingsUI();
    </script>
  </div>




<!-- payments -->

<?php if($rows['payments']):?>

<div class="table">
            <div class="table_header">
                <div style="display: flex;" >
                    <h3> Payments Reminders on Projects </h3>
                </div>
                
            </div>
            <div class="table_section">
                <table>
                    <thead>
                        <tr>
                            <th>Project ID</th>
                            <th>User Name</th>
                            <th>Installment Number</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Notify User</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rows['payments'] as $row) :?>
                        
                            <tr>                       
                                <td><?=$row->project_id?></td>
                                <td><?=$row->user->firstname?> <?=$row->user->lastname?></td>
                                <td><?=$row->installement_number?></td>  
                                <td><?=$row->amount?></td>       
                                <td><?=$row->date?></td> 
                                <td>
                                    <a href="<?=ROOT?>/coordinatordashboard/notify/<?=$row->user_id?>/<?=$row->amount?>/<?=$row->installement_number?>/<?=$row->date?>/<?=$row->id?>">
                                        <button><i class="fa-solid fa-bell" style="color: #e67f1e;"></i></button>
                                    </a>
                                </td>
                               
                            </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>    
        </div>
    <?php else:?>
        <h4>No Payment Notifications are found</h4>
        <!-- <div>
            <a href="#">
                <button class="add___">Add Staff</button>
            </a>
        </div> -->
    <?php endif;?>        







  <div class="ratings-container" style="display: flex; justify-content: space-between; max-width: 1300px; margin: 20px auto;display: flex;flex-wrap: wrap;justify-content: space-between;text-align: center;">
    
  <div class="vertical-box" style="width: 550px; margin-right: 10px; background-color: #fff; border-radius: 5px; padding: 10px; margin-bottom: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: box-shadow 0.3s ease;">
        <div style="font-size: 20px; ;">Ongoing Project Count:</div>
        <div style="font-size: 32px; font-weight: bold;"><?php echo $rows['ongoing'][0]->total; ?></div>
    </div>
    <div class="vertical-box" style="width: 600px; margin-right: 10px; background-color: #fff; border-radius: 5px; padding: 10px; margin-bottom: 10px; box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); transition: box-shadow 0.3s ease;">
        <div style="font-size: 20px; ;">Project Request Count for the past 2 months :</div>
        <!-- <div style="font-size: 15px; ;">for the past 2 months :</div> -->
        <div style="font-size: 32px; font-weight: bold;"><?php echo $rows['project_request_count'][0]->total; ?></div>
    </div>
</div>


  
   
    
    

<?php $this->view('includes/footer'); ?>
<?php else: ?>
    <?php $this->view('404'); ?>
<?php endif; ?>
