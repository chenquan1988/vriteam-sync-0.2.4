<?php /* Smarty version 2.6.26, created on 2014-12-11 14:45:29
         compiled from web/ticket_latest.tpl */ ?>
<?php if ($this->_tpl_vars['search']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "web/ticket_searchd.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['list']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "web/ticket_list.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
<p class="none"><img src="../../static/core/img/none.png" border="0">　<span>系统还没有上线单!</span></p>
<?php endif; ?>