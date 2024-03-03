<style>
body {
  font-family: Arial, sans-serif;
  color: #333;
}

h1 {
  text-align: center; 
}

h1 {
  font-size: 36px;
  margin-bottom: 20px;
}

h2 {
  font-size: 24px;
  margin: 30px 0 20px;
}

img {
  display: block;
  max-width: 300px;
  margin: 0 auto 30px;
}

p {
  line-height: 1.5;
  margin: 0 0 15px; 
}

ul {
  list-style: none;
  padding-left: 0;
}

li {
  line-height: 1.8;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline; 
}

.content {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 15px;
} 
</style>

<h1>Мед Плюс</h1> 

<h2>О нас</h2>

<p>
  Мед Плюс - частная клиника, оказывающая широкий спектр медицинских услуг. 
  У нас работают высококвалифицированные врачи, используются современное 
  оборудование и передовые методы лечения.
</p>

<h2>Наши преимущества</h2>

<ul>
  <li>Индивидуальный подход к каждому пациенту</li>
  <li>Короткие сроки записи на прием</li>
  <li>Удобное расположение и гибкий график работы</li>
  <li>Приемлемые цены</li>
</ul>

<p>
  <a href="<?= \yii\helpers\Url::to(['site/about']) ?>">Подробнее о нас</a>
</p>