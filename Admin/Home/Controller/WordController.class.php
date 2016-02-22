<?php
namespace Home\Controller;
use Think\Controller;

class WordController extends CommonController {
    public function index ()
    {
       $this->display();
    }
    
     public function newsword ()
    {
       $slide = M('silde');
       $where['type'] = '3';
       $list = $slide -> where($where) -> select();
        // p($list);die;
       $this -> assign('list' , $list);
       $this->display();
    }

    public function del_word () 
    {   
        if (!IS_POST) {
            $this ->error("页面不存在");
        } 
        $id = I('post.id','','htmlspecialchars'); 
        $slide = M('silde');
        $uploadtype = $slide->delete($id); 
        if ($uploadtype) {
           echo "删除成功";
        } else {
             echo "删除失败";
        }
        
    }
    // 上传图片
    public function upload () 
    {
        if (!IS_POST) {
            $this -> error('页面不存在');
        }
        // p($_POST);die;
        $upload = $this ->_upload();
        $type = I('post.type','','htmlspecialchars');
        // p($type);die;
        if ($type =='首页作品') {
            $upload_id = I('post.city','','htmlspecialchars');
            $slide = M('silde');
            $map['type'] = '1';
            $map['upload_id'] = $upload_id;
            $data['address'] = $upload;
            mark_text("./Uploads/" . $upload, "新宏昌书画院", 150, 250);
            $uploadtype1 = $slide->where($map)->save($data);
            if ($uploadtype1 = '1') {
                echo "上传成功1";
            } else {
                echo "上传失败1";
            }
            

        } if ($type == '最新作品') {
            $upload_id = I('post.city','','htmlspecialchars');
            $slide = M('silde');
            $map['type'] = '2';
            $map['upload_id'] = $upload_id;
            $data['address'] = $upload;
            mark_text("./Uploads/" . $upload, "新宏昌书画院", 150, 250);
            $uploadtype2 = $slide->where($map)->save($data); 
            if ($uploadtype2 = '1') {
                echo "上传成功2";
            } else {
                echo "上传失败2";
            }
        } if ($type == '作品赏析') {
            // $upload_id ;= I('post.city','','htmlspecialchars');
            //p($_POST);
            $slide = M('silde');
            $data['type'] = '3';
            // $map['upload_id'] = $upload_id;
            $data['address'] = $upload;
            // $silde->type='3';
            // $silde->address = $upload;
            mark_text("./Uploads/" . $upload, "新宏昌书画院", 150, 250);
            $uploadtype3 = $slide->add($data);
            if ($uploadtype3 = '1') {
                echo "上传成功3";
            } else {
                echo "上传失败3";
            }
        } if ($type == '缩略图上传') {
            // $upload_id ;= I('post.city','','htmlspecialchars');
            //p($_POST);
             $upload_id = I('post.city','','htmlspecialchars');
            $slide = M('silde');
            $map['type'] = '4';
            $map['upload_id'] = $upload_id;
            $data['address'] = $upload;
            mark_text("./Uploads/" . $upload, "新宏昌书画院", 150, 250);
            $uploadtype4 = $slide->where($map)->save($data); 
            if ($uploadtype4 = '1') {
                echo "上传成功缩略图";
            } else {
                echo "上传失败缩略图";
            }
        }
            
        
        
    }

    /**
     * 处理图片上传
     */
    Private function _upload ()
    {
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Uploads/'; // 设置附件上传根目录
        $upload->uploadRepace = true; //覆盖同名
        $upload->thunb     = true; //进行缩略图处理
        $upload->thunbMaxWidth =90;//缩略图宽度
        $upload->thunbMaxHeight =60;//缩略图高度
        $upload->thunbPrefix ='mini_';//缩略图前缀
        // $upload->savePath  =     ''; // 设置附件上传（子）目录
        // 上传文件 
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            return array('status' => 0, 'msg' => $this->error($upload->getError()) );
        }else{// 上传成功
            foreach($info as $file){
            return $file['savepath'].$file['savename'];
        }
            $this->success('上传成功！');
        }
        }
    }

    //图片加水印
     function mark_pic
     (
         $background, $waterpic, $x, $y){
         $back=imagecreatefromjpeg($background);
         $water=imagecreatefromgif($waterpic);
         $w_w=imagesx($water);
         $w_h=imagesy($water);
         imagecopy($back, $water, $x, $y, 0, 0, $w_w, $w_h);
         imagejpeg($back,"__PUBLIC__/images/hee8.jpg");
         imagedestroy($back);
         imagedestroy($water);
    }
         // mark_pic("./images/hee.jpg", "./images/gaolf.gif", 50, 200);
    //图片加文字水印
    function mark_text($background, $text, $x, $y)
    {
        $back=imagecreatefromjpeg($background);
        $color=imagecolorallocate($back, 0, 255, 0);
        imagettftext($back, 20, 0, $x, $y, $color, "simkai.ttf", $text);
        imagejpeg($back, "./images/hee7.jpg");
        imagedestroy($back);
    }
     