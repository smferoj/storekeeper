Create a basic Laravel project for a storekeeper by utilising routes, controllers, migration, and query builder.Every time a new product is introduced, it must be entered using a form that includes the amount. Update the product quantity data if a new item is sold. The store owner can work with a syndicate consultant to change the product price. Create a dashboard and display four cards with the sales figures for today, yesterday, this month, and last month. Furthermore, create a table on a new page to display the sale transaction history.
stage-1: create project and database setup
stage-2: Homepage creation with HomeController
.create HomeController
.create Home route
.create Home Page 

stage-3: Creating layout 
 . creating master-layout in resource=>views
 .keep homepage within master layout

stage-4: Product table, Model and Controller (product crud)

. create products table (php artisan make:migration create_products_table)
.create make:model Product (php artisan make:model Product)
.table shema setup 
     $table->id();
                $table->string('name');
                $table->string('description')->nullable();
                $table->decimal('price', 10, 2); 
                $table->decimal('amount', 8, 2); 
                $table->string('image');
                $table->timestamps(); 

. Modle validate
   protected $fillable = [
        'name',
        'description',
        'price',
        'amount',
        'image'
    ];
     