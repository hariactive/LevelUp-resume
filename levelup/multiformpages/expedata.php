<?php
$userid = $_SESSION['user_id'];
$workfatchsql = "SELECT * FROM `workexperience` WHERE userid = $userid";
$resultque = mysqli_query($conn, $workfatchsql);
$count = 0;
while ($row3 = mysqli_fetch_array($resultque)) {
    $count = $count + 1;
?>
<h5>Experience <?php echo $count; ?></h5><br>
<div class="form-group">
    <label for="company-name">Company name <span style="color: red;">*</span></label>
    <input type="text" class="form-control" id="company-name" aria-describedby="emailHelp" placeholder="Google"
        value="<?php echo $row3['companyname']; ?>">
</div>
<div class="form-group">
    <label for="job-title">Job title <span style="color: red;">*</span></label>
    <input type="text" class="form-control" id="job-title" aria-describedby="emailHelp" placeholder="SDE-1 "
        value="<?php echo $row3['jobtitle']; ?>">
</div>
<div class="form-group">
    <label for="employee-type">Employment type <span style="color: red;">*</span></label>
    <select id="select-skill" class="form-control employment-type">
        <option value="0">Selec one</option>
        <option value="<?php echo $row3['employeetype']; ?>" selected>
            <?php echo $row3['employeetype']; ?>
        </option>
        <option value="Full-time">Full time</option>
        <option value="Part-time">Part time</option>
        <option value="Internship">Internship</option>
        <option value="Contract">Contract</option>
        <option value="Freelance">Freelance</option>
    </select>
</div>
<div class="form-group">
    <label for="job-location">Job location <span style="color: red;">*</span></label>
    <input type="text" class="form-control" id="job-location" aria-describedby="emailHelp"
        placeholder="Noida, Utter Pradesh" value="<?php echo $row3['joblocation']; ?>">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Start date <span style="color: red;">*</span></label>
    <div class="row">
        <div class="col-md-6">
            <select id="select-skill" class="form-control start-date-year">
                <option value="0">Year</option>
                <option value="<?php echo $row3['startyear']; ?>" selected>
                    <?php echo $row3['startyear']; ?>
                </option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
            </select>
        </div>
        <div class="col-md-6">
            <select id="select-skill" class="form-control start-date-month">
                <option value="0">Month</option>
                <option value="<?php echo $row3['startmonth']; ?>" selected>
                    <?php echo $row3['startmonth']; ?>
                </option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October </option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
    </div>
</div>
<div class="form-group end-date">
    <label for="exampleInputEmail1">End date <span style="color: red;">*</span></label>
    <div class="row">
        <div class="col-md-6">
            <select id="select-skill" class="form-control end-date-year">
                <option value="0">Year</option>
                <option value="<?php echo $row3['endyear']; ?>" selected>
                    <?php echo $row3['endyear']; ?>
                </option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
            </select>
        </div>
        <div class="col-md-6">
            <select id="select-skill" class="form-control end-date-month">
                <option value="0">Month</option>
                <option value="<?php echo $row3['endmonth']; ?>" selected>
                    <?php echo $row3['endmonth']; ?>
                </option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October </option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
        </div>
    </div>
</div>
<!-- <div class="form-group">
    <label for="description">Description <span style="color: red;">*</span></label>
    <textarea name="worktextarea" cols="30" rows="4" class="form-control" id="description" aria-describedby="emailHelp"
        placeholder="Give some info about your job"><?php echo $row3['description']; ?></textarea>
</div> -->

<?php } ?>