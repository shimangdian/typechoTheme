<?php
/**
 * Optica for Typecho
 * 
 * @package Optica
 * @author 雨落泪尽
 * @version 1.2
 * @link http://1000yun.cn
 */
 
 $this->need('header.php');
 ?>
<section id="posts" class="content clearfix avatar-style-square">
<?php while($this->next()): ?>
 <article class="text">
  <div class="post-wrapper clearfix">
    <section class="post">
    <?php if (isset($this->fields->Status)): ?>
      <a href="<?php $this->permalink() ?>"><div class="source"><?php $this->excerpt(150, '...');?></div></a>
    <?php else: ?>
      <h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
      <div class="source"><?php $this->excerpt(); ?></div>
    <?php endif; ?>
    </section>
    <section class="panel">
    <footer class="post-footer">
      <section class="meta"> 
        <ul class="date-notes">
          <li class="post-notes">
            <?php $this->date('Y-n-j H:i'); ?>
          </li>
        </ul>
      </section>
    <section class="post-controls">
      <ul>
        <li><a href="<?php $this->permalink() ?>#comments" title="<?php $this->commentsNum('快抢沙发', '沙发被抢', '%d 条评论'); ?>" class="share icon-export"></a></li>
      </ul>
    </section>
    </footer>
   </section>
  </div>
 </article>
<?php endwhile; ?>
</section>
<div class="obox page-nav center">
<?php $this->pageNav() ;?>
</div>
<?php $this->need('footer.php'); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?4c0413e8d619578543a2fc9217038252";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript" color="139,137,137" opacity='0.7' zIndex="-2" count="99" src="//cdn.bootcss.com/canvas-nest.js/1.0.1/canvas-nest.min.js"></script>
