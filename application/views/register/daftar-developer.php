  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="browser_width colelem" id="u4200-bw">
    <div id="u4200"><!-- group -->
     <div class="clearfix" id="u4200_align_to_page">
      <nav class="MenuBar clearfix grpelem" id="menuu4205"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u4220"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u4221" href="<?= base_url('') ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u4224-4"><!-- content --><p>Home</p></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u4206"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u4209" href="<?= base_url('announcement') ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u4210-4"><!-- content --><p>Announcement</p></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u4213"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u4214" href="<?= base_url('ebook') ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u4215-4"><!-- content --><p>Ebook</p></div></a>
       </div>
      </nav>
      <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu4203" href="<?= base_url('login') ?>"><!-- container box --><div class="clearfix grpelem" id="u4204-4"><!-- content --><p>Login</p></div></a>
      <a class="nonblock nontext Button ButtonSelected rounded-corners clearfix grpelem" id="buttonu4201" href="<?= base_url('register') ?>"><!-- container box --><div class="clearfix grpelem" id="u4202-4"><!-- content --><p>Daftar</p></div></a>
     </div>
    </div>
   </div>
   <div class="browser_width colelem" id="u4199-bw">
    <div id="u4199"><!-- simple frame --></div>
   </div>
   <div class="Headline clearfix colelem" id="u4314-4"><!-- content -->
    <h1>Form Pendaftaran</h1>
   </div>
   <div class="browser_width colelem" id="u4505-bw">
    <div id="u4505"><!-- simple frame --></div>
   </div>
   <div class="clearfix colelem" id="ppu4554"><!-- group -->
    <div class="clearfix grpelem" id="pu4554"><!-- column -->
     <div class="rounded-corners colelem" id="u4554"><!-- simple frame --></div>
     <div class="rounded-corners colelem" id="u4551"><!-- simple frame --></div>
    </div>
    <div class="clearfix grpelem" id="u4517-14"><!-- content -->
     <p id="u4517-2">Apa perbedaan antara Developer &amp; Kontributor?</p>
     <p id="u4517-3">&nbsp;</p>
     <p id="u4517-7">Ketika mendaftar sebagai <span id="u4517-5">Developer</span>, Anda dapat mengikuti Challenge &amp; Akademi yang disediakan oleh Dicoding.</p>
     <p id="u4517-8">&nbsp;</p>
     <p id="u4517-12">Ketika mendaftar sebagai <span id="u4517-10">Partner</span>, Anda dapat membuat Challenge. Tetapi Anda tidak dapat mengikuti Challenge.</p>
    </div>
    <div class="rounded-corners grpelem" id="u4535"><!-- simple frame --></div>
    <div class="clearfix grpelem" id="pu4526-5"><!-- column -->
     <div class="clearfix colelem" id="u4526-5"><!-- content -->
      <p>Sekarang Anda Mendaftar Sebagai <span id="u4526-2">Developer</span></p>
     </div>
     <div class="clearfix colelem" id="u4529-6"><!-- content -->
      <p><span><a class="nonblock" href="<?= base_url('register/partner') ?>"><span id="u4529">Saya ingin berganti &amp; mendaftar sebagai Kontributor</span></a></span></p>
     </div>
     <?= form_open_multipart('register/member', array(
        'class'  => 'form-grp clearfix colelem',
        'id'     => 'widgetu4382'
      )) ?>
      <div class="fld-grp clearfix grpelem" id="widgetu4417" data-required="true"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u4419-4" for="widgetu4417_input"><!-- content --><span class="actAsPara">Username</span></label>
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4418-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu4417_input" name="username" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu4417_prompt" for="widgetu4417_input"><span class="actAsPara"></span></label></span>
       <div class="fld-message clearfix grpelem" id="u4420-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu4409" data-required="true" data-type="email"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u4410-4" for="widgetu4409_input"><!-- content --><span class="actAsPara">Email:</span></label>
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4412-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu4409_input" name="email" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu4409_prompt" for="widgetu4409_input"><span class="actAsPara"></span></label></span>
       <div class="fld-message clearfix grpelem" id="u4411-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu4401" data-required="true"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u4403-4" for="widgetu4401_input"><!-- content --><span class="actAsPara">Password</span></label>
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4404-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu4401_input" name="password" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu4401_prompt" for="widgetu4401_input"><span class="actAsPara"></span></label></span>
       <div class="fld-message clearfix grpelem" id="u4402-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
      <div class="fld-grp clearfix grpelem" id="widgetu4391" data-required="true"><!-- none box -->
       <label class="fld-label actAsDiv clearfix grpelem" id="u4393-4" for="widgetu4391_input"><!-- content --><span class="actAsPara">Konfirmasi Password</span></label>
       <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4392-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu4391_input" name="password2" tabindex="4"/><label class="wrapped-input fld-prompt" id="widgetu4391_prompt" for="widgetu4391_input"><span class="actAsPara"></span></label></span>
       <div class="fld-message clearfix grpelem" id="u4394-4"><!-- content -->
        <p>Required</p>
       </div>
      </div>
      <div class="clearfix grpelem" id="u4422-4"><!-- content -->
       <p>Submitting Form...</p>
      </div>
      <div class="clearfix grpelem" id="u4400-4"><!-- content -->
       <p>The server encountered an error.</p>
      </div>
      <div class="clearfix grpelem" id="u4399-4"><!-- content -->
       <p>Form received.</p>
      </div>
      <input class="submit-btn NoWrap grpelem" id="u4421-17" type="submit" name="daftar" value=" " tabindex="5"/><!-- state-based BG images -->
     <?= form_close() ?>
     <div class="clearfix colelem" id="u4560-8"><!-- content -->
      <p>Saya menyetujui <span><a class="nonblock" href="<?= base_url('home/term/developer') ?>">aturan pakai</a></span> yang berlaku</p>
     </div>
    </div>
   </div>
   <div class="verticalspacer"></div>
   <div class="browser_width colelem" id="u4291-bw">
    <div id="u4291"><!-- simple frame --></div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u4421-17-r.png" alt=""/>
   <img class="preload" src="images/u4421-17-m.png" alt=""/>
   <img class="preload" src="images/u4421-17-fs.png" alt=""/>
  </div>
