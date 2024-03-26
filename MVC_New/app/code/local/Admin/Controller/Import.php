<?php

class Admin_Controller_Import extends Core_Controller_Admin_Action
{

    public function viewAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addJs('js/page.js');
        $layout->getChild('head')->addJs('js/head.js');
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/header.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/footer.css");
        $layout->getChild('head')->addCss(Mage::getBaseUrl() . "skin/css/product/form.css");
        $child = $layout->getchild('content');
        $import = $layout->createBlock('import/admin_view');
        $child->addChild('import', $import);
        $layout->toHtml();
    }

    public function uploadAction()
    {
        if (isset ($_FILES["importfile"]["name"])) {
            $e = $_FILES["importfile"]["error"];
            $n = $_FILES["importfile"]["name"];
            $t = $_FILES["importfile"]["tmp_name"];
            $s = $_FILES["importfile"]["size"];
            $allowed = array('csv');
            $ext = explode(".", $n);

            if ($e == 0) {
                if (!file_exists(Mage::getBaseDir('media/import/') . $n)) {
                    if (in_array($ext[1], $allowed)) {
                        if (move_uploaded_file($t, Mage::getBaseDir('media/import/') . $n)) {
                            echo ("file uploaded succesfully");
                        } else {
                            echo "file cannot be uploaded";
                        }
                    } else {
                        echo "this extension is not allowed";
                    }
                } else {
                    echo "file already exist";
                }
            } else {
                echo "error:" . $e;
            }
        }
        // $this->setRedirect('admin/import/view');
    }

    public function readAction()
    {
        $path = Mage::getBaseUrl() . 'media/import/' . $_FILES["importfile"]["name"];
        $row = 1;
        $header = [];
        $array = [];
        if (($open = fopen($path, "r")) !== false) {
            while (($data = fgetcsv($open, 1000, ",")) !== false) {
                if ($row == 1) {
                    $header = $data;
                    $row++;
                    continue;
                }
                $array = array_combine($header, $data);
                $importData = json_encode($array);
                Mage::getModel('import/import')->addData('json_data', $importData)
                    ->addData('type', 'product')
                    ->save();
                print_r($data);
            }
            // print_r($array);

            fclose($open);
        }
    }

}