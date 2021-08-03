<?php

namespace Database\Seeders;

use App\Models\BumdesPost;
use App\Models\TarunaPost;
use App\Models\CovidQuotes;
use App\Models\BumdesImages;
use App\Models\BumdesQuotes;
use App\Models\TarunaImages;
use App\Models\TarunaQuotes;
use App\Models\BumdesMembers;
use App\Models\BumdesSotkDetail;
use App\Models\CovidTips;
use App\Models\LowerCovid;
use App\Models\TarunaMembers;
use App\Models\TarunaSotkDetail;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        BumdesQuotes::factory(5)->create();
        BumdesMembers::factory(10)->create();
        BumdesPost::factory(20)->create();
        BumdesImages::factory(4)->create();
        BumdesSotkDetail::create([
            'detail' =>'      <div class="container">
            <h2>TUGAS dan FUNGSI</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
            </p>
          </div>
    
          <div class="container mt-4">
            <h3>PELINDUNG</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    
          <div class="container">
            <h3>Ketua</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Sekretaris</h3>
            <p class=>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Bendahara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Humas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Media</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    
          <div class="container mt-5" id="visi">
            <h2>VISI dan MISI</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
            </p>
          </div>
    
          <div class="container mt-4">
            <h3>Visi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    
          <div class="container">
            <h3>Misi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    '
        ]);

        TarunaQuotes::factory(5)->create();
        TarunaMembers::factory(10)->create();
        TarunaPost::factory(20)->create();
        TarunaImages::factory(4)->create();
        TarunaSotkDetail::create([
            'detail' => '      <div class="container">
            <h2>TUGAS dan FUNGSI</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
            </p>
          </div>
    
          <div class="container mt-4">
            <h3>PELINDUNG</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    
          <div class="container">
            <h3>Ketua</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Sekretaris</h3>
            <p class=>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Bendahara</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Humas</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          <div class="container">
            <h3>Media</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    
          <div class="container mt-5" id="visi">
            <h2>VISI dan MISI</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
            </p>
          </div>
    
          <div class="container mt-4">
            <h3>Visi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
    
          <div class="container">
            <h3>Misi</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat corporis reprehenderit nam fugiat, odio quis sequi nesciunt officia hic odit consequuntur ipsum eius a magnam, rerum ea omnis amet.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ipsam quam quibusdam. Nesciunt eaque reiciendis qui unde. Vero, ipsam dolorem. Quod soluta voluptates quisquam quo unde, harum commodi odit?
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, esse totam. Corporis laboriosam non veritatis voluptate possimus aut eligendi quae aliquam, odio at nesciunt tempore animi iste corrupti obcaecati porro!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, minima dolorem tempore molestiae accusamus explicabo atque aperiam deserunt quos, natus, neque excepturi quia ipsa adipisci cumque sapiente. Reiciendis, non quaerat?
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nesciunt aliquam ex facere nulla molestias excepturi officia. Nemo nobis suscipit eos ipsa? Cum sit laboriosam blanditiis tenetur culpa, odio voluptatum hic.
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt repellendus quod, quibusdam dolor facilis magnam dignissimos est, consectetur recusandae consequuntur tempora reiciendis, quas impedit illum voluptatibus ab non fugiat quasi.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eligendi repellat voluptatibus unde officiis vel quas rem. Laborum nisi voluptas, ad totam aliquid maiores. Exercitationem, doloribus. Vel iste ullam corrupti.
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi corrupti unde ratione! Architecto excepturi autem reiciendis illum tempore, eum beatae dolore voluptates iure? Unde, illo nihil porro ipsam vitae voluptatem.
            </p>
          </div>
          '
        ]);

        CovidQuotes::factory(5)->create();
        LowerCovid::create([
          'title' => "Penularan Covid-19",
          'content' =>                 '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus tempora assumenda repudiandae maiores recusandae doloremque consequatur et incidunt aut error aliquid libero quisquam dolore a modi, nam ea non! Eveniet.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur voluptate beatae alias quasi, doloribus veritatis optio cupiditate suscipit neque dignissimos blanditiis! Mollitia ex incidunt dolore cum voluptatem ipsa eos corporis.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque ab perferendis aliquam laboriosam fuga temporibus, at esse debitis totam necessitatibus voluptate veniam qui harum, ut accusantium quisquam corporis iste! Debitis?
          </p>'

        ]);
        CovidTips::factory(6)->create();

    }
}
