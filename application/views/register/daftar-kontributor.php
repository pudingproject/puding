  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="browser_width colelem" id="u4568-bw">
     <div id="u4568"><!-- group -->
      <div class="clearfix" id="u4568_align_to_page">
       <nav class="MenuBar clearfix grpelem" id="menuu4573"><!-- horizontal box -->
        <div class="MenuItemContainer borderbox clearfix grpelem" id="u4581"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u4584" href="<?= base_url('') ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u4586-4"><!-- content --><p>Home</p></div></a>
        </div>
        <div class="MenuItemContainer borderbox clearfix grpelem" id="u4588"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u4589" href="<?= base_url('announcement') ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u4592-4"><!-- content --><p>Announcement</p></div></a>
        </div>
        <div class="MenuItemContainer borderbox clearfix grpelem" id="u4574"><!-- vertical box -->
         <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u4575" href="<?= base_url('ebook') ?>"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u4577-4"><!-- content --><p>Ebook</p></div></a>
        </div>
       </nav>
       <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu4571" href="<?= base_url('login/partner') ?>"><!-- container box --><div class="clearfix grpelem" id="u4572-4"><!-- content --><p>Login</p></div></a>
       <a class="nonblock nontext Button rounded-corners clearfix grpelem" id="buttonu4569" href="<?= base_url('register/partner') ?>"><!-- container box --><div class="clearfix grpelem" id="u4570-4"><!-- content --><p>Daftar</p></div></a>
      </div>
     </div>
    </div>
    <div class="browser_width colelem" id="u4567-bw">
     <div id="u4567"><!-- simple frame --></div>
    </div>
    <div class="Headline clearfix colelem" id="u4596-4"><!-- content -->
     <h1>Form Pendaftaran</h1>
    </div>
    <div class="browser_width colelem" id="u4618-bw">
     <div id="u4618"><!-- simple frame --></div>
    </div>
    <div class="clearfix colelem" id="ppu4624"><!-- group -->
     <div class="clearfix grpelem" id="pu4624"><!-- column -->
      <div class="rounded-corners colelem" id="u4624"><!-- simple frame --></div>
      <div class="rounded-corners colelem" id="u4623"><!-- simple frame --></div>
     </div>
     <div class="clearfix grpelem" id="u4619-14"><!-- content -->
      <p id="u4619-2">Apa perbedaan antara Developer &amp; Kontributor?</p>
      <p id="u4619-3">&nbsp;</p>
      <p id="u4619-7">Ketika mendaftar sebagai <span id="u4619-5">Developer</span>, Anda dapat mengikuti Challenge &amp; Akademi yang disediakan oleh Dicoding.</p>
      <p id="u4619-8">&nbsp;</p>
      <p id="u4619-12">Ketika mendaftar sebagai <span id="u4619-10">Partner</span>, Anda dapat membuat Challenge. Tetapi Anda tidak dapat mengikuti Challenge.</p>
     </div>
     <div class="rounded-corners grpelem" id="u4622"><!-- simple frame --></div>
     <div class="clearfix grpelem" id="pu4620-5"><!-- column -->
      <div class="clearfix colelem" id="u4620-5"><!-- content -->
       <p>Sekarang Anda Mendaftar Sebagai <span id="u4620-2">Kontributor</span></p>
      </div>
      <div class="clearfix colelem" id="u4621-6"><!-- content -->
       <p><span><a class="nonblock" href="<?= base_url('register') ?>"><span id="u4621">Saya ingin berganti &amp; mendaftar sebagai Developer</span></a></span></p>
      </div>
      <?= form_open_multipart('register/kontributor', array(
        'class'   => 'form-grp clearfix colelem',
        'id'      => 'widgetu4597'
      )) ?>
       <div class="fld-grp clearfix grpelem" id="widgetu4598" data-required="true"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u4600-4" for="widgetu4598_input"><!-- content --><span class="actAsPara">Username</span></label>
        <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4601-4"><!-- content --><input class="wrapped-input" type="text" spellcheck="false" id="widgetu4598_input" name="username" tabindex="1"/><label class="wrapped-input fld-prompt" id="widgetu4598_prompt" for="widgetu4598_input"><span class="actAsPara"></span></label></span>
        <div class="fld-message clearfix grpelem" id="u4599-4"><!-- content -->
         <p>Required</p>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu4608" data-required="true" data-type="email"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u4609-4" for="widgetu4608_input"><!-- content --><span class="actAsPara">Email:</span></label>
        <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4610-4"><!-- content --><input class="wrapped-input" type="email" spellcheck="false" id="widgetu4608_input" name="email" tabindex="2"/><label class="wrapped-input fld-prompt" id="widgetu4608_prompt" for="widgetu4608_input"><span class="actAsPara"></span></label></span>
        <div class="fld-message clearfix grpelem" id="u4611-4"><!-- content -->
         <p>Required</p>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu4614" data-required="true"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u4616-4" for="widgetu4614_input"><!-- content --><span class="actAsPara">Password</span></label>
        <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4617-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu4614_input" name="password" tabindex="3"/><label class="wrapped-input fld-prompt" id="widgetu4614_prompt" for="widgetu4614_input"><span class="actAsPara"></span></label></span>
        <div class="fld-message clearfix grpelem" id="u4615-4"><!-- content -->
         <p>Required</p>
        </div>
       </div>
       <div class="fld-grp clearfix grpelem" id="widgetu4602" data-required="true"><!-- none box -->
        <label class="fld-label actAsDiv clearfix grpelem" id="u4603-4" for="widgetu4602_input"><!-- content --><span class="actAsPara">Konfirmasi Password</span></label>
        <span class="fld-input NoWrap actAsDiv rounded-corners clearfix grpelem" id="u4604-4"><!-- content --><input class="wrapped-input" type="password" spellcheck="false" id="widgetu4602_input" name="password2" tabindex="4"/><label class="wrapped-input fld-prompt" id="widgetu4602_prompt" for="widgetu4602_input"><span class="actAsPara"></span></label></span>
        <div class="fld-message clearfix grpelem" id="u4605-4"><!-- content -->
         <p>Required</p>
        </div>
       </div>
       <div class="clearfix grpelem" id="u4606-4"><!-- content -->
        <p>Submitting Form...</p>
       </div>
       <div class="clearfix grpelem" id="u4612-4"><!-- content -->
        <p>The server encountered an error.</p>
       </div>
       <div class="clearfix grpelem" id="u4607-4"><!-- content -->
        <p>Form received.</p>
       </div>
       <input class="submit-btn NoWrap grpelem" id="u4613-17" type="submit" name="daftar" value=" " tabindex="5"/><!-- state-based BG images -->
      <?= form_close() ?>
      <div class="clearfix colelem" id="u4625-8"><!-- content -->
       <p>Saya menyetujui <span><a class="nonblock" href="<?= base_url('home/term/kontributor') ?>">aturan pakai</a></span> yang berlaku</p>
      </div>
     </div>
    </div>
    <div class="verticalspacer"></div>
    <div class="browser_width colelem" id="u4595-bw">
     <div id="u4595"><!-- simple frame --></div>
    </div>
   </div>
  </div>
  <div class="preload_images">
   <img class="preload" src="images/u4613-17-r.png" alt=""/>
   <img class="preload" src="images/u4613-17-m.png" alt=""/>
   <img class="preload" src="images/u4613-17-fs.png" alt=""/>
  </div>