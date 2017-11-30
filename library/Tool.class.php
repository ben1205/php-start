<<<<<<< HEAD
<?php 
	//辅助工具类,里面存放的都是静态方法，直接调用，无需实例化
	final class Tool {

		//弹出一个信息,然后跳转到指定的页面
		static public function _alertLocation($_info,$_url) {
			echo "<script type=\"text/javascript\">alert('$_info');location.href='$_url';</script>";
			exit();
		}

		//弹窗返回之前
		static public function _alertBack($_info) {
			echo "<script type=\"text/javascript\">alert('$_info');history.back();</script>";
			exit();
		}

	}

=======
<?php 
	//辅助工具类,里面存放的都是静态方法，直接调用，无需实例化
	final class Tool {

		//弹出一个信息,然后跳转到指定的页面
		static public function _alertLocation($_info,$_url) {
			echo "<script type=\"text/javascript\">alert('$_info');location.href='$_url';</script>";
			exit();
		}

		//弹窗返回之前
		static public function _alertBack($_info) {
			echo "<script type=\"text/javascript\">alert('$_info');history.back();</script>";
			exit();
		}

	}

>>>>>>> 487b7b2ce1a21af65f32e5b87c25f492ab36aea3
 ?>