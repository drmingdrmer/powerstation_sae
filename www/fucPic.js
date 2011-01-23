//������Ϣ
//first��ʾ��1����ʾ��ͼƬ
//fadeTime��ʾ������ʱ��
//autoSlideInterval��ʾ�Զ��õƲ��ŵ�ʱ����
var config = {
  first: 1, 
  fadeTime: 5000, 
  autoSlideInterval: 4000
};
function $(id){return document.getElementById(id);}
function opacity(el, value) {
  el.style.filter = "progid:DXImageTransform.Microsoft.Alpha(opacity = " + value + ")";
  el.style.MozOpacity = value / 100;
}

var btnHolder, titHolder;
var imgs=[];
var lastImg;

function main(){
  prepare();

  dispImg(config.first-1);
  setInterval(function (){
      var last = lastImg ? lastImg.idx : 0;
      dispImg((last + 1) % imgs.length);
    }, config.autoSlideInterval);
}

function prepare(){
  btnHolder = $("buttonHolder");
  titHolder = $("titleArea");

  btnHolder.style.top = $("image").style.height;

  var html = "", ptn = "<a href='javascript:dispImg(NUM-1);' >NUM</a>";
  /* var imms = $("image").getElementsByTagName("img"); */
  var imms = $("image").getElementsByTagName("a");

  for (var i=0; i<imms.length; ++i){
    var e = imms[i];
    imgs.push(e);
    e.idx = i;
    html += ptn.replace(/NUM/g, i+1);
  }
  btnHolder.innerHTML = html;
}

function dispImg(i){
  var img = imgs[i];
  if (img == lastImg) return;

  opacity(img, 0);
  img.opac = 0;
  img.parentNode.appendChild(img);
  var t = setInterval(function (){
      img.opac += 10;
      opacity(img, img.opac);
      if (img.opac >= 100){
        clearInterval(t);
      }
    }, 50);
  lastImg && (btnHolder.childNodes[lastImg.idx].className = "");
  btnHolder.childNodes[img.idx].className = "selected";
  titHolder.innerHTML = img.getElementsByTagName("img")[0].alt || "";
  lastImg = img;
}
