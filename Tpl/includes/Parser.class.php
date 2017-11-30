<?php 
	//模板解析类
	class Parser {
		//字段，保存模板内容
		private $_tpl;

		//构造方法，用于获取模板文件里的内容
		public function __construct($_tplFile) {
			if(!$this->_tpl = file_get_contents($_tplFile)){
				exit('ERROR:模板文件读取错误!');
			};
		}

		//解析普通变量
		private function parVar(){
			$_patten = '/\{\$([\w]+)\}/';
			if(preg_match($_patten,$this->_tpl)){
				$this->_tpl = preg_replace($_patten,"<?php echo \$this->_vars['$1']?>",$this->_tpl);
			}
		}

		//解析if语句
		private function parlf() {
			$_pattenlf = '/\{if\s+\$([\w]+)\}/';
			$_pattenEndlf = '/\{\/if\}/';
			$_pattenElse = '/\{else\}/';

			if(preg_match($_pattenlf,$this->_tpl)){
				if(preg_match($_pattenEndlf,$this->_tpl)) {
					$this->_tpl = preg_replace($_pattenlf, "<?php if( \$this->_vars['$1']){?>", $this->_tpl);
					$this->_tpl = preg_replace($_pattenEndlf, "<?php } ?>", $this->_tpl);
					if(preg_match($_pattenElse,$this->_tpl)) {
						$this->_tpl = preg_replace($_pattenElse, "<?php } else { ?>", $this->_tpl);
					}
				} else {
					exit('ERROR:if语句没有关闭!');
				}
			}
		}

		//PHP代码注释
		private function parCommon(){
			$_patten = '/\{#\}(.*)\{#\}/';
			if(preg_match($_patten,$this->_tpl)) {
				$this->_tpl = preg_replace($_patten,"<?php /* $1 */?>",$this->_tpl);
			}
		}

		//解析foreach语句
		private function parForeach(){
			$_pattenForeach = '/\{foreach\s+\$([\w]+)\(([\w]+),([\w]+)\)\}/';
			$_pattenEndForeach = '/\{\/foreach\}/';
			$_pattenVar = '/\{@([\w]+)\}/';

			if(preg_match($_pattenForeach, $this->_tpl)) {
				if(preg_match($_pattenEndForeach, $this->_tpl)) {
					$this->_tpl = preg_replace($_pattenForeach,"<?php foreach (\$this->_vars['$1'] as \$$2 => \$$3) { ?>",$this->_tpl);
					$this->_tpl = preg_replace($_pattenEndForeach, "<?php } ?>", $this->_tpl);
					if(preg_match($_pattenVar, $this->_tpl)) {
						$this->_tpl = preg_replace($_pattenVar,"<?php echo \$$1 ?>",$this->_tpl);
					}
				} else {
					exit('ERROR:foreach语句必须有结尾标签!');
				}
			}

		}

		//解析外部传入文件
		private function parInclude() {
			$_patten = '/\{include\s+file=\"([\w\.\-]+)\"\}/';

			if(preg_match($_patten, $this->_tpl, $_file)) {
				if(!file_exists($_file[1]) || empty($_file)) {
					exit('ERROR:包含文件出错!');
				}

				$this->_tpl = preg_replace($_patten,"<?php include '$1';?>",$this->_tpl);
			}
		}
		
		//对外公共方法
		public function compile($_parFile) {

			//解析模板内容
			$this->parVar();
			$this->parlf();
			$this->parCommon();
			$this->parForeach();
			$this->parInclude();

			//生成编译文件
			if(!file_put_contents($_parFile, $this->_tpl)) {
				exit('ERROR:编译文件生成出错!');
			};
		}
	}
 ?>