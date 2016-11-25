
function domCreator(container, src, itemName, cPara, aLink)
{
    //TODO:add all the variables to the code
    var row = $('<div></div>').addClass('row');
    var col = $('<div></div>').addClass('col-md-6 col-md-offset-3');
    var card = $('<div></div>').addClass('card');

    var cardImg = $('<div></div>').addClass('card-image');
    var img = $('<img></img>').addClass('img-responsive').load(function(){
      $(container).fadeIn(2350);
    }).attr("src", src);
    var imgSpan = $('<span></span>').addClass('card-title').text('Item Name');
    cardImg.append(img, imgSpan);

    var cardContent = $('<div></div>').addClass('card-content');
    var cardPara = $('<p></p>').text('This is a placeholder');
    cardContent.append(cardPara);

    var cardAction = $('<div></div>').addClass('card-action');
    var cardLink = $('<a></a>').addClass('mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect').text('GET DETAILS');
    cardAction.append(cardLink);

    card.append(cardImg, cardContent, cardAction);
    col.append(card);
    row.append(col);
    $(container).append(row).hide();
}

function callDom(container)
{
  var timer = 2500;
  for(var c = 0; c < 5; c++)
  {
    if(container === "#men_acc")
    {
      domCreator(container, "http://material-design.storage.googleapis.com/publish/v_2/material_ext_publish/0Bx4BSt6jniD7TDlCYzRROE84YWM/materialdesign_introduction.png", "", "", "");//TODO: add property here after ajax parsing
    }
    else if(container === "#women_acc")
    {
      domCreator(container, "http://www.designdune.com/wp-content/uploads/2012/12/Pink-Tutu-Fabric-Texture-520x390.jpg", "", "", "");//TODO: add property here after ajax parsing
    
    }
    else
    {
      domCreator(container, "https://d2d00szk9na1qq.cloudfront.net/Product/b9c66a4d-2f9d-4167-a44b-e63bd3d0fa58/Images/Large_DC-663.jpg", "", "", "");//TODO: add property here after ajax parsing
    
    }
  }
}



callDom("#men_acc");
callDom('#women_acc');
callDom('#children_acc');
