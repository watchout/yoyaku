<h3>申込ページ</h3>

<div id="content"></div>
<script type="text/babel" src="<?php echo base_url(); ?>react/master/regist.js"></script>

<?php echo form_open('master/regist/submit'); ?>

<ul class="demo-list-item mdl-list">
    <li class="mdl-list__item">
	<span class="mdl-cell mdl-cell--2-col">お名前</span>
	<div class="mdl-textfield mdl-js-textfield  mdl-cell mdl-cell--2-col">
	    <input class="mdl-textfield__input" type="text" id="name">
	    <label class="mdl-textfield__label" for="sample1">お名前</label>
	</div>
    </li>

    <li class="mdl-list__item">
	<span class="mdl-cell mdl-cell--2-col">メールアドレス</span>
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--4-col">
	    <input class="mdl-textfield__input" type="mail" id="mail">
	    <label class="mdl-textfield__label" for="mail">example@yoyaku.com</label>
	</div>
    </li>
    
    <li class="mdl-list__item">
	<span class="mdl-cell mdl-cell--2-col">メールアドレス(確認用)</span>
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--4-col">
	    <input class="mdl-textfield__input" type="mail" id="mail2">
	    <label class="mdl-textfield__label" for="mail2">example@yoyaku.com</label>
	</div>
    </li>

    <li class="mdl-list__item">
	<span class="mdl-cell mdl-cell--2-col">住所</span>
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--6-col">
	    <input class="mdl-textfield__input" type="text" id="addr">
	    <label class="mdl-textfield__label" for="addr">東京都渋谷区代々木2-23-1 ニューステイトメナー1030</label>
	</div>
    </li>

    <li class="mdl-list__item">
	<span class="mdl-cell mdl-cell--2-col">電話番号(携帯OK)</span>
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--1-col">
	    <input class="mdl-textfield__input" type="text" id="tel1">
	    <label class="mdl-textfield__label" for="tel1">03</label>
	</div>
	ー
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--1-col">
	    <input class="mdl-textfield__input" type="text" id="tel2">
	    <label class="mdl-textfield__label" for="tel2">6383</label>
	</div>
	ー
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--1-col">
	    <input class="mdl-textfield__input" type="text" id="tel3">
	    <label class="mdl-textfield__label" for="tel3">3285</label>
	</div>
    </li>
    
    <li class="mdl-list__item">
	<span class="mdl-cell mdl-cell--2-col">パスワード</span>
	<div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--2-col">
	    <input class="mdl-textfield__input" type="text" id="pass">
	    <label class="mdl-textfield__label" for="pass">英数半角6〜8文字</label>
	</div>
    </li>
    
    <li class="mdl-list__item">
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
	   申し込む
	</button>
    </li>
    </ul>

<?php echo form_close(); ?>

<script type="text/babel" src="<?php echo base_url(); ?>react/src/hellow.js"></script>