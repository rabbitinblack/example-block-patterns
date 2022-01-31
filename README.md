# ตัวอย่างการใช้งาน Block Patterns

เราสามารถสร้าง Block Patterns ได้ด้วย `register_block_pattern` โดยเราสามารถอ่านรายละเอียดการใช้งานได้ที่ https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/

รวมถึงเราสามารถใช้เพิ่ม Block Pattern Category ได้ด้วย `register_block_pattern_category` โดยวิธีการใช้งานทั้งสองฟังก์ชั่นได้แบบนี้

## register_block_pattern_category

```php
register_block_pattern_category(
	'category-patterns-title',
	array(
		'label' => __( 'Label', 'text-domain' )
	)
);
```

โดยการใช้งานจะแบ่งออกเป็น 2 arguments ดังนี้
- `title` : ซึ่งในตัวอย่างก็คือ `category-patterns-title` โดยจะนำไปใช้ร่วมกับ `register_block_pattern`
- `properties` โดยเป็น array ที่ประกอบด้วย
	- `label` ชื่อของ Block Pattern ที่จะแสดงผลให้เห็น

ซึ่งการใช้งาน `register_block_pattern_category` จะสั่งผ่าน init hook

```php
function rabbitinblack_register_pattern_category() {
	register_block_pattern_category(
		'category-patterns-title',
		array(
			'label' => __( 'Label', 'text-domain' )
		)
	);
}
add_action( 'init', 'rabbitinblack_register_pattern_category' );
```

## register_block_pattern

```php
register_block_pattern(
	'my-plugin/my-block-pattern',
	array(
		'title' => __( 'Title', 'text-domain' ),
		'description' => __( 'Desciption', 'text-domain' ),
		'categories' => array( 'category-patterns-title' ),
		'keywords' => array( 'keywords' ),
		'viewportWidth' => 768,
		'content' => '<!-- wp:paragraph --><p>Paragraph</p><!-- /wp:paragraph -->'
	)
);
```

โดยการใช้งานจะแบ่งออกเป็น 2 arguments ดังนี้
- `title` : ซึ่งในตัวอย่างก็คือ `my-plugin/my-block-pattern` โดยแบ่งการตั้งชื่อออกเป็น `namespace/title`
- `properties` โดยเป็น array ที่ประกอบด้วย
	- `title` ชื่อของ Block Pattern ที่จะแสดงผลให้เห็น
	- `description` คำอธิบายของ Block Pattern นี้
	- `categories` Category ของ Block Pattern นี้ โดยเป็น array และสามารถใส่ category ที่ Block Pattern ไปแสดงผลได้หลาย category
	- `keywords` Keyword ของ Block Pattern เพื่อใช้ในการค้นหา
	- `viewportWidth` ความกว้างของ Block Pattern ที่แสดงผลเป็นตัวอย่างในหลังบ้าน
	- `content` ใส่ Block HTML Markup สำหรับใช้กับ Block Pattern นี้

ซึ่งการใช้งาน `register_block_pattern` จะสั่งผ่าน init hook

```php
function rabbitinblack_register_pattern() {
	register_block_pattern(
		'my-plugin/my-block-pattern',
		array(
			'title' => __( 'Title', 'text-domain' ),
			'description' => __( 'Desciption', 'text-domain' ),
			'categories' => array( 'category-patterns-title' ),
			'keywords' => array( 'keywords' ),
			'viewportWidth' => 768,
			'content' => '<!-- wp:paragraph --><p>Paragraph</p><!-- /wp:paragraph -->'
		)
	);
}
add_action( 'init', 'rabbitinblack_register_pattern' );
```