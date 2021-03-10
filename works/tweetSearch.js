// javascript:
// ;(function(){
  try {
    const url = location.href;
    const listIdArr = url.match(/(?<=\/lists\/)\d{15,20}/)　?? [null];
    const userNameArr = url.match(/(?<=twitter\.com\/)\w*/) ?? [null];
    // リスト画面の場合はuserNameArrが['i']に、検索画面の場合は「'search'」になるので注意
    let isList = false;
    let isUser = false;
    if(listIdArr[0] != null) {
      isList = true;
    } else if(userNameArr[0] != null && userNameArr[0] != 'search' && userNameArr[0].length >= 1) {
      isUser = true;
    } else {
      const isMoveDefault = window.confirm('【取得失敗】\nユーザーかリストのページで試して下さい。\nTwitterへ移動しますか？');
      if(isMoveDefault !== false){
        window.open('https://twitter.com/search?q=(filter%3Afollows)(-filter%3Areplies)&f=live', '_self');
        throw new Error('');
      } else {
        throw new Error('');
      }
    }
    // 検索ワードを入力してもらう
    const searchWord1 = window.prompt('検索ワードを入力', '') ?? false;
    if(searchWord1 === false){
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
// }());
