<?php $this->view('includes/header')?>

<h1 style="text-align: center;">Daily Progress Report - 24.02.2024</h1>


<div class="report-container">
    <h2 style="color:#E5863D;">Weather Report</h2>
       
        <div class="report-section">
            <div class="report-section-header">Rain Hours</div>
            <div class="report-section-content">
                <table class="report-table" style="min-width:800px">
                    <tr>
                        <th>Time</th>
                        <th>Weather</th>
                    </tr>
                    <tr>
                        <td>8.00am-9.00am</td>
                        <td>Light Rain</td>
                    </tr>
                    <tr>
                        <td>9.00am-10.00am</td>
                        <td>Drizzle</td>
                    </tr>
                    
                </table>
            </div>
        </div>

        <div class="report-section">
            <div class="report-section-header">Temperature</div>
            <div class="report-section-content">
                <p>Temperature: 25°C</p>
            </div>
        </div>

        <div class="report-section">
            <div class="report-section-header">Overall Weather</div>
            <div class="report-section-content">
                <p>Partly cloudy with occasional rain showers.</p>
            </div>
        </div>
        <br><hr><br>
        <h2 style="color:#E5863D;">Work Description</h2>
        <br>

        <div class="report-section">
            <div class="report-section-header">Work Description</div>
            <div class="report-section-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod dolor ac urna viverra tristique.</p>
            </div>
        </div>
        
        <br><hr><br>
        <h2 style="color:#E5863D;">Challenges</h2>
        <br>

        <div class="report-section">
            <div class="report-section-header">Nature of the Challenge</div>
                <div class="report-section-content">
                    <p>Equipment Failure</p>
                </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">Description</div>
                <div class="report-section-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">Impact of the Schedule</div>
                <div class="report-section-content">
                    <p>Yes</p>
                </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">Root Cause</div>
                <div class="report-section-content">
                    <p>Mechanical failure</p>
                </div>
        </div>
        <div class="report-section">
            <div class="report-section-header">How to Face It</div>
                <div class="report-section-content">
                    <p>Replace faulty equipment</p>
                </div>
        </div>
        <br><hr><br>
        <h2 style="color:#E5863D;">General Note</h2>
        <br>
        <div class="report-section">
            <div class="report-section-header">General Note & Comments</div>
                <div class="report-section-content">
                    <p>Replace faulty equipment</p>
                </div>
        </div>

    </div>
    <a href="<?=ROOT?>/clientcomplaint"> <button class="v_submit_button" type="button" style="margin-left:780px;">Ok</button></a>
