
<?php include('layout/css.php'); ?>
    <section>
      <div>
        Course :<span id="courseId"><?php echo $course; ?></span>
      </div>
      <div>
        <!-- <a type="button" href="<?php echo base_url('quiz/treset/index/').$id."/".$modeId."/2"; ?>"  class="btn btn-primary">2:00</a>
        <a type="button" href="<?php echo base_url('quiz/treset/index/').$id."/".$modeId."/5"; ?>"  class="btn btn-primary">5:00</a>
        <a type="button" href="<?php echo base_url('quiz/treset/index/').$id."/".$modeId."/10"; ?>"  class="btn btn-primary">10:00</a>
        <a type="button" href="<?php echo base_url('quiz/treset/index/').$id."/".$modeId."/15"; ?>"  class="btn btn-primary">15:00</a> -->
        <select class="" name="testTime" id="testTime" style="padding: 8px; background: #fff; width: 20%;">
          <option value="">--Select Time--</option>
          <option value="2">2 minute</option>
          <option value="5">5 minute</option>
          <option value="10">10 minute</option>
          <option value="15">15 minute</option>
        </select>
        <select class="" name="selectLang" id="selectLang" onchange="language(this.value)"  style="padding: 8px; background: #fff; width: 20%;">
          <option value="">--Select Language--</option>
          <option value="kruti_dev">Kruti Dev</option>
          <option value="mangal_regular" selected="">Mangal Regular</option>
          <option value="english">English</option>
        </select>
        <select class="" name="selectMode" id="selectMode" style="padding: 8px; background: #fff; width: 20%;">
          <option value="">--Select Mode--</option>
          <option value="1">Easy</option>
          <option value="2">Medium</option>
          <option value="3">Hard</option>
        </select>
        <select class="" name="selectPara" id="selectPara" onchange="paragraph(this.value)" style="padding: 8px; background: #fff; width: 25%;">
          <option value="">--Select Paragraph--</option>
          <?php foreach ($paraByCourse as $value): ?>
            <option value="<?php echo $value->id ?>"><?php echo substr($value->lessonDesc,0,20)?></option>
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
