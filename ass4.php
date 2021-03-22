<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-6">
    <form method="post" action="">
        <div class="form-group p-4">
            <label for="data"></label>
            <textarea class="form-control" name="data" id="data" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" name="" id="" class="btn btn-info p-2 mx-4" value="submit">

        </form>
    </div>
    <div class="col-6 p-5">
    <textarea class="form-control" name="data" id="data" cols="30" rows="10"><?php 
        if (isset($_POST['data']) && $_POST['data'] != '') {
            # code...
            $stopword = ['۔','اب',"\"", '،', '\'' ,',', '.', ';', ':', "'", "\"","?", '-','_','the ', "i ", "me ", "my ", "myself ", "we ", "our ", "ours ", "ourselves ", "you ", "your ", "yours ", "yourself ", "yourselves ", "he ", "him ", "his " , "himself ", "she ", "her ", "hers ", "herself ", "it ", "its ", "itself ", "they ", "them " , "their ", "theirs ", "themselves ", "what ", "which ", "who ", "whom ", "this ", "that ", "these ", "those ", "am ", "is ", "are ", "was ", "were ", "be ", "been ", "being ", "have ", "has ", "had ", "having ", "do ", "does ", "did ", "doing ", "a ", "an ", "the ", "and ", "but ", "if ", "or ", "because ", "as ", "until ", "while ", "of ", "at ", "by ", "for ", "with ", "about ", "against ", "between ", "into ", "through ", "during ", "before ", "after ", "above ", "below ", "to ", "from ", "up ", "down ", "in ", "out ", "on ", "off ", "over ", "under ", "again ", "further ", "then ", "once ", "here ", "there ", "when ", "where ", "why ", "how ", "all ", "any ", "both ", "each ", "few ", "more ", "most ", "other ", "some ", "such ", "no ", "nor ", "not ", "only ", "own ", "same ", "so ", "than ", "too ", "very ",   "can ", "will ", "just ", "don ", "should ", "now ",'ابھی',' اپنا',' اپنے',' اپنی', ' اٹھا',' اس',' اسے',' اسی',' اگر',' ان',' انہوں',' انہی',' انہیں',' انھیں',' اور',' اے',' او',' ایسا',' ایسے',' ایسی',' ایک',' آ',' آپ',' آتا',' آتے',' آتی',' آگے',' آنا',' آنے',' آنی',' آئے',' آئی',' آئیں',' آیا',' با',' بڑا',' بڑے',' بڑی',' بعد'
           ,'بعض'
           ,'بلکہ'
           ,'بہت'
           ,'بھی'
         ,'بے'
           ,'پاس'
           ,'پر'
           ,'پہلے'
           ,'پھر'
           ,'تا'
           ,'تاکہ'
           ,'تب'
           ,'تجھ'
           ,'تجھے'
           ,'تک'
           ,'تم'
           ,'تمام'
           ,'تمہارا'
           ,'تمہارے'
           ,'تمھارے'
           ,'تمہاری'
           ,'تمہیں'
           ,'تمھیں'
           ,'تھا'
           ,'تھے'
           ,'تھی'
           ,'تھیں'
           ,'تو'
           ,'تیری'
           ,'تیرے'
           ,'جا'
           ,'جاتا'
           ,'جاتی'
           ,'جاتے'
           ,'جاتی'
           ,'جانے'
           ,'جانی'
           ,'جاؤ'
           ,'جائے'
           ,'جائیں'
           ,'جب'
           ,'جس'
           ,'جن'
           ,'جنہوں'
           ,'جنہیں'
           ,'جو'
           ,'جیسا'
           ,'جیسے'
           ,'جیسی'
           ,'جیسوں'
           ,'چاہیئے'
           ,'چلا'
           ,'چاہے'
           ,'چونکہ'
           ,'حالاں'
           ,'حالانکہ'
           ,'دو'
           ,'دونوں'
           ,'دوں'
           ,'دے'
           ,'دی '
           ,'دیا'
           ,'دیں'
           ,'دیے'
           ,'دیتا'
           ,'دیتے'
           ,'دیتی'
           ,'دینا'
           ,'دینے'
           ,'دینی'
           ,'دیئے'
           ,'ڈالا'
           ,'ڈالنا'
           ,'ڈالنے'
           ,'ڈالنی'
           ,'ڈالے'
           ,'ڈالی'
           ,'ذرا'
           ,'رکھا'
           ,'رکھتا'
           ,'رکھتے'
           ,'رکھتی'
           ,'رکھنا'
           ,'رکھنے'
           ,'رکھنی'
           ,'رکھے'
           ,'رکھی'
           ,' رہ '
           ,'رہا'
           ,'رہتا'
           ,'رہتے'
           ,'رہتی'
           ,'رہنا'
           ,'رہنے'
           ,'رہنی'
           ,'رہو'
           ,'رہے'
           ,'رہی'
           ,'رہیں'
           ,'زیادہ'
           ,'سا'
           ,'سامنے'
           ,'سب'
           ,'سکتا'
           ,'سو'
           ,'سے'
           ,'سی'
           ,'شاید'
           ,'صرف'
           ,'طرح'
           ,'طرف'
           ,'عین'
           ,'کا'
           ,'کبھی'
           ,'کچھ'
           ,'کہہ'
           ,'کر'
           ,'کرتا'
           ,'کرتے'
           ,'کرتی'
           ,'کرنا'
           ,'کرنے'
           ,'کرو'
           ,'کروں'
           ,'کرے'
           ,'کریں'
           ,'کس'
           ,'کسے'
           ,'کسی'
           ,'کہ'
           ,'کہا'
           ,'کہے'
           ,'کو'
           ,'کون'
           ,'کوئی'
           ,'کے'
           ,'کی'
           ,'کیا'
           ,'کیسے'
           ,'کیوں'
           ,'کیونکہ'
           ,'کیے'
           ,'کئے'
           ,'گا'
           ,'گویا'
           ,'گے'
           ,'گی'
           ,'گیا'
           ,'گئے'
          , 'گئی'
           ,'لا'
           ,'لاتا'
           ,'لاتے'
           ,'لاتی'
           ,'لانا'
           ,'لانے'
           ,'لانی'
           ,'لایا'
           ,'لائے'
           ,'لائی'
           ,'لگا'
           ,'لگے'
           ,'لگی'
           ,'لگیں'
           ,'لو'
           ,'لے'
           ,'لی'
           ,'لیا'
           ,'لیتا'
           ,'لیتے'
           ,'لیتی'
           ,'لیکن'
           ,'لیں'
           ,'لیے'
           ,'لئے'
           ,'مجھ'
           ,'مجھے'
           ,'مگر'
           ,'میرا'
           ,'میرے'
           ,'میری'
           ,'میں'
           ,'نا'
           ,'نہ'
           ,'نہایت'
           ,'نہیں'
           ,'نے'
           ,'ہاں'
           ,'ہر'
           ,'ہم'
           ,'ہمارا'
           ,'ہمارے'
           ,'ہماری'
           ,'ہو'
           ,'ہوا'
           ,'ہوتا'
           ,'ہوتے'
           ,'ہوتی'
           ,'ہوتیں'
           ,'ہوں'
           ,'ہونا'
           ,'ہونگے'
           ,'ہونے'
           ,'ہونی'
           ,'ہوئے'
           ,'ہوئی'
           ,'ہوئیں'
           ,'ہے'
           ,'ہی'
           ,'ہیں'
          
           ,'والا'
           ,'والوں'
           ,'والے'
           ,'والی'
           ,'وہ'
           ,'وہاں'
           ,'وہی'
           ,'وہیں'
           ,'یا'
           ,'یعنی'
           ,'یہ'
           ,'یہاں'
           ,'یہی'
           ,'یہیں' ];
            $res = array();
           foreach ($stopword as $item) {
                # code...
                
                  $_POST['data'] = str_ireplace($item , '',$_POST['data']);
                  $_POST['data'] = str_ireplace('  ', ' ',$_POST['data']);

            }
            
           $arr = explode(' ',strtolower($_POST['data']));
          
           foreach ($arr as $item ) {
            //    if ($item[strlen($item)-1] == 's' || $item[strlen($item)-1] == 'S') {
            //        # code...
            //        $item[strlen($item)-1] = "";
            //        echo $item . "\n";
            //    }

                $res[ucfirst($item)] = substr_count(strtolower($_POST['data']),$item);

           }
         
         arsort($res);
           foreach ($res as $key => $value) {
               # code...
               if (strlen($key) > 1 ) {
                if ($value > 1 ) {
                    # code...
                    echo $key ." : ". $value ."\n";
                }                
               }
           }        
        }
    ?></textarea>

    </div>
        </div>
    
    </div>
</body>
</html>