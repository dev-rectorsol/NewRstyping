
<?php include('layout/css.php'); ?>
    <section>
      <div>
        <span class="h4">Course Name :- </span><span id="courseId" class="h4"><?php echo $course; ?></span>
      </div><br>
      <div>
        <select class="" name="testTime" id="testTime" onchange="kurtidev(this.value)" style="padding: 8px; background: #fff; width: 20%;">
          <option <?php if ($duration==2) {?>selected<?php } ?> value="2" selected="">2 minute</option>
          <option <?php if ($duration==5) {?>selected<?php } ?> value="5">5 minute</option>
          <option <?php if ($duration==10) {?>selected<?php } ?> value="10">10 minute</option>
          <option <?php if ($duration==15) {?>selected<?php } ?> value="15">15 minute</option>
        </select>
        <select class="" name="selectLang" id="selectLang" onchange="language(this.value)"  style="padding: 8px; background: #fff; width: 20%;">
          <option value="kruti_dev" selected="">Kruti Dev</option>
          <!-- <option value="mangal_regular">Mangal Regular</option> -->
          <option value="english">English</option>
        </select>
        <select class="" name="modeId" id="modeId" onchange="kurtidev(this.value)" style="padding: 8px; background: #fff; width: 20%;">
          <option <?php if ($modeId==1) { ?>selected<?php } ?> value="1" selected="">Easy</option>
          <option <?php if ($modeId==2) { ?>selected<?php } ?> value="2">Medium</option>
          <option <?php if ($modeId==3) { ?>selected<?php } ?> value="3">Hard</option>
        </select>
        <select class="" name="selectPara" id="selectPara" onchange="kurtidev(this.value)" style="padding: 8px; background: #fff; width: 25%;">
          <?php foreach ($paraByCourse as $value): ?>
            <option <?php if ($paraId == $value->id) { ?>selected<?php } ?> value="<?php echo $value->id ?>"><?php echo substr($value->lessonDesc,0,20)?></option>
          <?php endforeach ?>
        </select>
      </div>
      </div>
    </section><br>
    <section id="word-section" class="kruti_dev">
      <div class="waiting">⌛</div>
    </section>

    <section id="type-section">
        <input id="typebox" name="typebox" type="text" tabindex="1" autofocus onkeyup="typingTest(event)" class="kruti_dev"/>
        <div id="timer" class="type-btn"><span><?php echo $time; ?></span></div>
        <button id="restart" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">↻</span>
      </button>
    </section>

<?php include('layout/footer.php'); ?>
