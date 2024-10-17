<?php
$userid = $_SESSION['user_id'];
$skillfatchsql = "SELECT * FROM `skills` WHERE userid = $userid";
$resultque = mysqli_query($conn, $skillfatchsql);
$count = 0;
while ($row2 = mysqli_fetch_array($resultque)) {
    $count = $count + 1;
?>
<h5>Skill <?php echo $count; ?></h5><br>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="skills">Skill <span style="color: red;">*</span></label>
            <input type="text" class="form-control" id="skills" aria-describedby="emailHelp" placeholder="Skill"
                name="skillname" value="<?php echo $row2['skillname']; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="select-skill">Skill level <span style="color: red;">*</span></label>
            <select id="select-skill" class="form-control" name="skilllevel">
                <option value="0">Selec one</option>
                <option value="<?php echo $row2['skilllevel']; ?>" selected><?php echo $row2['skilllevel']; ?></option>
                <option value="Beginner Level">Beginner Level</option>
                <option value="Intermediate Level">Intermediate Level</option>
                <option value="Advance Level">Advance Level</option>
            </select>
        </div>
    </div>
</div>
<?php } ?>