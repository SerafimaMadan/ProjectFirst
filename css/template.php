<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$this->setFrameMode(true);
?>
<div class="module__block module__block-rate">
	<h3>Биржевые <span class="hidden-xs"><br></span>&nbsp;курсы</h3>
	<p class="currency__list-p">Курсы валют <?=$arResult['DATE']?></p>
	<ul class="currency__list">
        <?foreach($arResult['Valute'] as $currency):?>
            <?if ($currency['@attributes']['ID'] == 'R01235' || $currency['@attributes']['ID'] == 'R01239'):?>
                <li class="currency__list__item text-center">
                    <p>
                        <span><?=$currency['CharCode']?></span>
                        <?=round(str_replace(',','.',$currency['Value']), 3)?>
                    </p>
                </li>
            <?endif;?>
        <?endforeach;?>
    </ul>
</div>
