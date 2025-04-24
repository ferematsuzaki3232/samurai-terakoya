$(function() {
    // ボタンがクリックされた場合
    // $('button').on('click', function(){
    //   console.log('ボタンがクリックされました');
    // });


    // $('div').on({
    //     'click': () => { /* クリック時の処理 */ },
    //     'dblclick': () => { /* ダブルクリック時の処理 */ },
    //     'mouseenter': () => { /* マウスカーソルが入ったときの処理 */ },
    //     'mouseout': () => { /* マウスカーソルが離れたときの処理 */ },
    //   });
    // ↓
    $('div').on({
        'click': () => {
          // 背景を赤 
          $('div').css('background-color', 'red');
          // テキストを「click」 
          $('div').text('click');
        },
        'dblclick': () => { 
          // 背景を緑 
          $('div').css('background-color', 'green'); 
          // テキストを「dblclick」 
          $('div').text('dblclick');
        },
        'mouseenter': () => {
          // 背景を青 
          $('div').css('background-color', 'blue'); 
          // テキストを「mouseenter」 
          $('div').text('mouseenter');
         },
         'mouseout': () => {
          // 背景をグレー 
          $('div').css('background-color', 'gray'); 
          // テキストを「mouseout」 
          $('div').text('mouseout');
        },
      });
   });