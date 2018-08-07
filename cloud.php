<?php
defined('_JEXEC') or die;

class plgContentCloud extends JPlugin
{
	public function onContentPrepare($context, $article, $params, $page=0)
	{

        preg_match_all('/{cloud_text}(.*?){\/cloud_text}/is',$article->text , $matches2);
        preg_match_all('/{cloud}(.*?){\/cloud}/is',$article->text , $matches);
        $j = 0;
        foreach($matches2[0] as $match2) {

            $text_simple2 = $matches2[1][$j];
            $article->text = str_replace($match2, '<div class="cloud-container"><div class="cloud-text">' . $text_simple2 . ' </div></div>', $article->text);
            $j++;

        }
        $i = 0;
            foreach ($matches[0] as $match) {

                $text_simple = $matches[1][$i];
                $article->text = str_replace($match, '<div class="cloud">' . $text_simple . ' </div>', $article->text);
                $i++;

            }


		return true;
	}
}
 
?>