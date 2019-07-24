<?php
$PageTitle = "404. «апрашиваема€ страница не найдена";
include("header.php");
?>
<table width="100%">
<tr><td height="200" valign="middle">
<p>ƒл€ поиска нужной информации воспользуйтесь <a href="help.php"><b>картой сайта</b></a> или нижеприведенной формой:</p>
<!-- Atomz Advanced Search HTML for Elmis -->
<form method="get" action="http://search.atomz.com/search/" name="frm_search">
<table cellspacing=0 cellpadding=1 border=0>
<tr><td colspan=4>
<!--<b>»скать:</b><br>-->
<input type=hidden size=35 name="sp-q">
<input size=35 name="sp-q2">
<!-- The "Search" button -->
<input type=button value="ѕоиск" onclick="submit_search()">
</p></td></tr>
</table>
<div style="display: none;">
<input type=hidden name="sp-a" value="sp10021504">
<input type=hidden name="sp-advanced" value=1>
<!-- Allow "any," "all," or "phrase" -->
<p><b>ѕо совпадению:&nbsp;</b>
<input type=radio name="sp-p" value="any" checked>любого&nbsp;слова
<input type=radio name="sp-p" value="all">всех&nbsp;слов
<input type=radio name="sp-p" value="phrase">фразы&nbsp;целиком<br>
<!-- Checkbox enables sound-alike matching -->
<input type=hidden name="sp-w-control" value=1>
<input type=checkbox name="sp-w" value="alike" checked>
включа€&nbsp;похожие&nbsp;слова
<!-- Date range criteria -->
<p><b>ќбновление:</b></p>
<p>
<input type=radio name="sp-d" value="custom" checked>
<select name="sp-date-range" size=1>
<option value=-1 selected>в&nbsp;любое&nbsp;врем€</option>
<option value=7>за&nbsp;последнюю&nbsp;неделю
</option>
<option value=14>за&nbsp;две&nbsp;недели
</option>
<option value=30>за&nbsp;мес€ц
</option>
<option value=60>за&nbsp;два&nbsp;мес€ца
</option>
<option value=90>за&nbsp;три&nbsp;мес€ца
</option>
<option value=180>за&nbsp;шесть&nbsp;мес€цев
</option>
<option value=365>за&nbsp;год
</option>
<option value=730>за&nbsp;два&nbsp;года
</option>
</select>
</p>
<p>&nbsp;</p>
<p>
<input type=radio name="sp-d" value=specific></p><p>с:</p>
<p>
<select name="sp-start-day" size=1>
<option value=0 selected></option>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
<option value=6>6</option>
<option value=7>7</option>
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
<option value=21>21</option>
<option value=22>22</option>
<option value=23>23</option>
<option value=24>24</option>
<option value=25>25</option>
<option value=26>26</option>
<option value=27>27</option>
<option value=28>28</option>
<option value=29>29</option>
<option value=30>30</option>
<option value=31>31</option>
</select>
<select name="sp-start-month" size=1>
<option value=0 selected></option>
<option value=1>€нвар€</option>
<option value=2>феврал€</option>
<option value=3>марта</option>
<option value=4>апрел€</option>
<option value=5>ма€</option>
<option value=6>июн€</option>
<option value=7>июл€</option>
<option value=8>августа</option>
<option value=9>сент€бр€</option>
<option value=10>окт€бр€</option>
<option value=11>но€бр€</option>
<option value=12>декабр€</option>
</select>
<input size=4 name="sp-start-year">
</p>
<p>&nbsp;</p><p>по:</p><p>
<select name="sp-end-day" size=1>
<option value=0 selected></option>
<option value=1>1</option>
<option value=2>2</option>
<option value=3>3</option>
<option value=4>4</option>
<option value=5>5</option>
<option value=6>6</option>
<option value=7>7</option>
<option value=8>8</option>
<option value=9>9</option>
<option value=10>10</option>
<option value=11>11</option>
<option value=12>12</option>
<option value=13>13</option>
<option value=14>14</option>
<option value=15>15</option>
<option value=16>16</option>
<option value=17>17</option>
<option value=18>18</option>
<option value=19>19</option>
<option value=20>20</option>
<option value=21>21</option>
<option value=22>22</option>
<option value=23>23</option>
<option value=24>24</option>
<option value=25>25</option>
<option value=26>26</option>
<option value=27>27</option>
<option value=28>28</option>
<option value=29>29</option>
<option value=30>30</option>
<option value=31>31</option>
</select>
<select name="sp-end-month" size=1>
<option value=0 selected></option>
<option value=1>€нвар€</option>
<option value=2>феврал€</option>
<option value=3>марта</option>
<option value=4>апрел€</option>
<option value=5>ма€</option>
<option value=6>июн€</option>
<option value=7>июл€</option>
<option value=8>августа</option>
<option value=9>сент€бр€</option>
<option value=10>окт€бр€</option>
<option value=11>но€бр€</option>
<option value=12>декабр€</option>
</select>
<input size=4 name="sp-end-year">
</p>
<!-- List box selects the search field -->
<p>
<b>ќбласть поиска:&nbsp;</b>
</p>
<p><select name="sp-x" size=1>
<option value="any" selected>везде</option>
<option value="title">заголовки документов</option>
<option value="desc">описани€ документов</option>
<option value="keys">ключевые слова</option>
<option value="body">текст документов</option>
<option value="alt">изображени€</option>
<option value="url">URL</option>
</select>
</p>
<!-- List box selects number of results to show per page -->
<p>
<b>ќтображать:&nbsp;</b>
</p>
<p><select name="sp-c" size=1>
<option value=5>5</option>
<option value=10 selected>10</option>
<option value=25>25</option>
<option value=50>50</option>
<option value=100>100</option>
</select>&nbsp;результатов&nbsp;
<!-- Show or hide summaries in search results -->
<select name="sp-m" size=1>
<option value=1 selected>с описани€ми</option>
<option value=0>без описаний</option>
</select><br>
</p>
<!-- Sort results by score or by date -->
<p>
<b>—ортировать&nbsp;по:&nbsp;</b>
</p><p><select name="sp-s" size=1>
<option value=0 selected>релевантности</option>
<option value=1>дате обновлени€</option>
</select>
</p>
<input type=hidden name="sp-f" value="windows-1251">
</div>
</form>
</td></tr>
</table>
<?php
include("footer.php");
?>

