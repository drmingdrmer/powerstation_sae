<?php include "include/header.php" ?>
    <!--main begin-->
    <div id="mainIndex">
        <div id="leIndex">
            <!--fucPic begin-->
            <div id="slide">
              <div id="image">
                <a href="#" ><img alt="��ר��������ת����" src="images/temp01.jpg" /></a>
                <a href="#" ><img alt="�����𳵸����������ޡ�������" src="images/ps_web_h_004.jpg" /></a>
                <a href="#" ><img alt="�������޵ĸ����͸������𳵵�����" src="images/ps_web_h_005.jpg" /></a>
              </div>
              <div id="buttonHolder"></div>
              <div id="titleArea">temp</div>
            </div>
            <script>main(); </script>
            <!--fucPic end-->
            <!--member begin-->
            <div id="member">
                <div class="boxLe">
                    <div class="pic"><img src="images/demo-zl.gif" width="130" height="130" alt="��־��" /></div>

                    <div class="txt">
                        <h2>��־��</h2>
                        ���᣺̨������ٽ����<br />
                        ٽ�����������հ�<br />
                        ѧ������Ͷ����������Ժ<br />
                        ���գ�1968.5.13<br />
                        ��������ţ��<br />
                        Ѫ�ͣ�AB<br />
                        �Ⱥã�����<br />
                        ��ϲ������ɫ���ڡ���<br />
                        ��ϲ������Ʒ����������ָ<br />
                        ��ϲ���ķ�װ��ʽ���������<br />
                        ��ϲ�����˶�������<br />
                        ��ϲ�������֣�ҡ����<br />
                        ���������£��򲿺ó���������<br />
                        ����Ը����׬Ǯ�ü��˹�������<br />
                        Ӱ�������ˣ�ĸ��
                    </div>
                </div>
                <div class="boxRi">
                    <div class="pic"><img src="images/demo-qx.gif" width="130" height="130" alt="������" /></div>
                        <div class="txt">
                        <h2>������</h2>
                        ���᣺̨������ٽ����<br />
                        ٽ��������A-BON<br />
                        ѧ������Ͷ����������Ժ<br />
                        ���գ�1969.2.15<br />
                        ������ˮƿ��<br />
                        Ѫ�ͣ�B<br />
                        �Ⱥã����֡���������<br />
                        ��ϲ������ɫ���ڡ���<br />
                        ��ϲ������Ʒ������������<br />
                        ��ϲ���ķ�װ��ʽ��T����ţ�п�<br />
                        ��ϲ�����˶�����������<br />
                        ��ϲ�������֣�ҡ���֡�������<br />
                        ���������£������Լ������ָ����<br />
                        ����Ը����������<br />
                        Ӱ�������ˣ�����
                    </div>
                </div>
            </div>
            <!--member end-->
            <div><img src="images/ps_web_012.gif" alt="������" /></div>
        </div>
        <div id="riIndex">

            <div id="board_2" class="blk02 _board_head" style="display:none">
                <h2><span><a href="/forum.php?mod=forumdisplay&fid=2" target="_blank" class="more01">More..</a></span>���Ի</h2>
                <ul class="listSty">
                </ul>
            </div>

            <!---->
            <div class="blk01 _board_head">
                <div style="text-align:center; padding-top:8px;">
                    <a href="/forum.php?mod=viewthread&tid=747&page=1&extra=page%3D1" target="_blank"><img src="images/muRoom.jpg" width="270" /></a>
                </div>
            </div>
            <!---->

            <div id="board_5" class="blk01 _board_head">
                <h2><span><a href="/forum.php?mod=forumdisplay&fid=5" target="_blank">More..</a></span>�𳵹켣</h2>
                <ul class="listSty">
                </ul>
            </div>

            <div id="board_6" class="blk01 _board_head">
                <h2 class="titA"><span><a href="/forum.php?mod=forumdisplay&fid=6" target="_blank">More..</a></span>����Ӱ��</h2>
                <ul class="listSty">
                </ul>
            </div>

            <div id="board_7" class="blk01 _board_head">
                <h2 class="titA"><span><a href="/forum.php?mod=forumdisplay&fid=7" target="_blank">More..</a></span>��������</h2>
                <ul class="listSty">
                </ul>
            </div>
        </div>
    </div>
    <!--main end-->
</div>
<script>

  (function (){

    function delegate(func, thiz) {
      return function () {
        return func.apply(thiz, arguments);
      }
    }

    function shorten(txt, len) {
      var t = txt.replace(/([\u00ff-\uffff])/g, "\x01$1");
      if (t.length > len) {
        t = t.substr(0, len).replace(/[\x01](.?)/g, '$1') + "..";
        return t;
      }
      return txt;
    }

    // powerstation.sinaapp.com/forum.php?mod=rss&fid=2
    // var feedsURL = "/bbs/rss.php?fid=_id_&amp;auth=0";
    var feedsURL = "/forum.php?mod=rss&fid=_id_&amp";
    var mainId=2;



    var topDiv = jQuery("#board_" + mainId);

    jQuery("#riIndex ._board_head").each( function (){
      var boardId = this.id.split("_")[1];
      var ul = jQuery(".listSty", this);
      var url = feedsURL.replace("_id_", boardId);

      var thiz = { boardId : boardId, elm : ul };
      jQuery.get(url, null,
        delegate( function (data) {
          var html = "";
          var limitDate = this.boardId == mainId;
          jQuery("item", data).each(function(i) {
            if (i < 10) {
              var timestr = jQuery("pubDate", this).text();



              var date = new Date(timestr).getTime();
              var ms = new Date().getTime();

              if (limitDate && ms - date > 1000 * 60 * 60 * 24 * 14) { return; }

              var title = jQuery("title", this).text();
              var url   = jQuery("link",  this).text();

              title = shorten(title, 36);

              html += '<li><a href="' + url + '"target="_blank">' + title + '</a></li>'
            }
          });


          this.elm.html(html);

          if (this.elm.get(0).parentNode == topDiv.get(0)) {
            if (html != '')  {
              topDiv.show();
            }
          }

        }, thiz));
    });
  })();

</script>
<?php include "include/footer.php"?>

