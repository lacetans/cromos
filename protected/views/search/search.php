<?php
$this->pageTitle=Yii::app()->name . ' - Search results';
$this->breadcrumbs=array(
    'Search Results',
);

?>
 
<h3>Search Results for: "<?php echo CHtml::encode($term); ?>"</h3>
<?php if (!empty($results)): ?>
    <?php foreach($results as $info):?>  
		    <p>Nom: <a href="<?php echo $info->link; ?>"><?php echo $query->highlightMatches(CHtml::encode($info->descripcio)); ?></a></p>
		    <p>Que és?: 
			<?php $url = $info->link;
				$array = explode("=", $url);
				$last_word = $array[1]; 
				$array = explode("/", $last_word);
				$last_word = $array[0]; 
				echo $last_word;
			?></p>
                    <hr/>
                <?php endforeach; ?>
 
            <?php else: ?>
                <p class="error">No results matched your search terms.</p>
            <?php endif; ?>
