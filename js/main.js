function twiSearch(){
// (function(){
  try {
    const url = location.href;
    // const url = 'https://twitter.com/soresoja/status/1367702843956731906';
    // const url = 'https://twitter.com/i/lists/931290338827874304';
    const listIdArr = url.match(/(?<=\/lists\/)\d{15,20}/)　?? [null];
    const userNameArr = url.match(/(?<=twitter\.com\/)\w*/) ?? [null];
    // urlがlistの場合もuserNameArrは['i']になるので注意
    let isList = false;
    let isUser = false;
    if(listIdArr[0] != null) {
      isList = true;
    } else if(userNameArr[0] != null && userNameArr[0].length >= 2) {
      isUser = true;
    } else {
      throw new Error('【取得失敗】検索したいTwitterユーザーかリストのページで試して下さい');
    }

    // 検索ワードを入力してもらう
    const searchWord1 = window.prompt('検索ワードを入力', '') ?? false;
    if(searchWord1 === false){
      // throw new Error('キャンセルしました');
      throw new Error('');
    } else {
      // const isIncludeRt = searchWord1.match(/^(\s*)[r|ｒ][t|ｔ](\s*)$|^(\s*)[r|ｒ][t|ｔ](\s+)|(\s+)[r|ｒ][t|ｔ](\s*)$/i);
      const rtRegex = /^[r|ｒ][t|ｔ](\s+)|(\s+)[r|ｒ][t|ｔ]$|^[r|ｒ][t|ｔ]$/i;
      const searchWord2 = searchWord1.trim().replace(rtRegex, '(filter:nativeretweets)');
      let query;
      if(isList === true){
        query = '(list:' + listIdArr[0] + ')' + searchWord2;
      } else if (isUser === true){
        query = '(from:' + userNameArr[0] + ')' + searchWord2;
      }
      const encodedQuery = encodeURIComponent(query);
      // const isExec = window.confirm('検索「' + query + '」\n\n実行しますか？');
      // if(isExec !== false){
        window.open('https://twitter.com/search?q=' + encodedQuery + '&f=live', '_self');
      // } else { throw new Error('キャンセルしました'); }
    }
  } catch(e) {
    if(e.message.length > 0){ window.alert(e.message); }
  }
}
// })()

// テキスト全選択
function selectAll(target) {
    target.select();
}

// 全文コピーボタン
function easyCopy() {
    var copyTarget = document.getElementById("copyTarget");
    copyTarget.select();
    document.execCommand("Copy");
    alert("全文コピーしました！");
}
