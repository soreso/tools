<?php
// JSブックマークレット  // 表示中のユーザーツイート検索
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>JSテスト</title>
  <link rel="stylesheet" href="/css/styles.css">
  <script type="text/javascript" src="/js/main.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <header>
    <!-- <h4>Twitter</h4> -->
    <!-- <h4>ブックマークレット</h4> -->
    <h4>Twitter一発検索</h4>
    <!-- <p><input type="button" value="入力ダイアログ" onClick="twiSearch()"></p> -->
  </header>
  <div class="main">
    <div class="container">
      <div class="contents">
        <a href="javascript:
          (function(){try{const url=location.href;const listIdArr=url.match(/(?<=\/lists\/)\d{15,20}/)　??[null];const userNameArr=url.match(/(?<=twitter\.com\/)\w*/)??[null];let isList=!1;let isUser=!1;if(listIdArr[0]!=null){isList=!0}else if(userNameArr[0]!=null&&userNameArr[0].length>=2){isUser=!0}else{throw new Error('【取得失敗】検索したいTwitterユーザーかリストのページで試して下さい')} const searchWord1=window.prompt('検索ワードを入力','')??!1;if(searchWord1===!1){throw new Error('')}else{const rtRegex=/^[r|ｒ][t|ｔ](\s+)|(\s+)[r|ｒ][t|ｔ]$|^[r|ｒ][t|ｔ]$/i;const searchWord2=searchWord1.trim().replace(rtRegex,'(filter:nativeretweets)');let query;if(isList===!0){query='(list:'+listIdArr[0]+')'+searchWord2}else if(isUser===!0){query='(from:'+userNameArr[0]+')'+searchWord2} const encodedQuery=encodeURIComponent(query);window.open('https://twitter.com/search?q='+encodedQuery+'&f=live','_self')}}catch(e){if(e.message.length>0){window.alert(e.message)}}})()
        ">
        いっぱつけんさく
        </a>
      </div>
      <div class="contents">
        <a href="javascript:
          (function(){try{const url=location.href;const listIdArr=url.match(/(?<=\/lists\/)\d{15,20}/)　??[null];const userNameArr=url.match(/(?<=twitter\.com\/)\w*/)??[null];let isList=!1;let isUser=!1;if(listIdArr[0]!=null){isList=!0}else if(userNameArr[0]!=null&&userNameArr[0].length>=2){isUser=!0}else{throw new Error('【取得失敗】検索したいTwitterユーザーかリストのページで試して下さい')} const searchWord1=window.prompt('検索ワードを入力','')??!1;if(searchWord1===!1){throw new Error('')}else{const rtRegex=/^[r|ｒ][t|ｔ](\s+)|(\s+)[r|ｒ][t|ｔ]$|^[r|ｒ][t|ｔ]$/i;const searchWord2=searchWord1.trim().replace(rtRegex,'(filter:nativeretweets)');let query;if(isList===!0){query='(list:'+listIdArr[0]+')'+searchWord2}else if(isUser===!0){query='(from:'+userNameArr[0]+')'+searchWord2} const encodedQuery=encodeURIComponent(query);window.open('https://twitter.com/search?q='+encodedQuery+'&f=live','_blank')}}catch(e){if(e.message.length>0){window.alert(e.message)}}})()
        ">
        いっぱつけんさく（別タブ）
        </a>
      </div>
      <div>
        <p>または……</p>
      </div>
      <div class="contents">
        <!-- <textarea id='copyTarget' onclick='selectAll(this)'> -->
        <textarea id='copyTarget'>
          javascript: (function(){try{const url=location.href;const listIdArr=url.match(/(?<=\/lists\/)\d{15,20}/)　??[null];const userNameArr=url.match(/(?<=twitter\.com\/)\w*/)??[null];let isList=!1;let isUser=!1;if(listIdArr[0]!=null){isList=!0}else if(userNameArr[0]!=null&&userNameArr[0].length>=2){isUser=!0}else{throw new Error('【取得失敗】検索したいTwitterユーザーかリストのページで試して下さい')} const searchWord1=window.prompt('検索ワードを入力','')??!1;if(searchWord1===!1){throw new Error('')}else{const rtRegex=/^[r|ｒ][t|ｔ](\s+)|(\s+)[r|ｒ][t|ｔ]$|^[r|ｒ][t|ｔ]$/i;const searchWord2=searchWord1.trim().replace(rtRegex,'(filter:nativeretweets)');let query;if(isList===!0){query='(list:'+listIdArr[0]+')'+searchWord2}else if(isUser===!0){query='(from:'+userNameArr[0]+')'+searchWord2} const encodedQuery=encodeURIComponent(query);window.open('https://twitter.com/search?q='+encodedQuery+'&f=live','_self')}}catch(e){if(e.message.length>0){window.alert(e.message)}}})()
        </textarea>
        <section><input type='button' value='全文コピー' onclick='easyCopy()'></section>
      </div>
    </div><!-- container -->
  </div><!-- main -->
</body>
</html>
<?php
// 参考：https://tagindex.com/javascript/window/prompt.html
//
// <script type="text/javascript">
// <!--
// function disp(){
// // 入力ダイアログを表示 ＋ 入力内容を user に代入
// user = window.prompt("ユーザー名を入力してください", "");
// // 入力内容が tama の場合は example_tama.html にジャンプ
// if(user == 'tama'){
//   location.href = "example_tama.html";
// }
// // 入力内容が hana の場合は example_hana.html にジャンプ
// else if(user == 'hana'){
//   location.href = "example_hana.html";
// }
// // 入力内容が一致しない場合は警告ダイアログを表示
// else if(user != "" && user != null){
//   window.alert(user + 'さんは登録されていません');
// }
// // 空の場合やキャンセルした場合は警告ダイアログを表示
// else{
//   window.alert('キャンセルされました');
// }
// }
// -->
// </script>
