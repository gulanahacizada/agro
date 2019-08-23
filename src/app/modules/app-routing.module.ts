import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { HomeComponent } from '../pages/home/home.component';

const routes: Routes = [

  {
    path: '',
    component: HomeComponent
  },

  {
    path: 'home',
    component: HomeComponent
  },

  {
    path: 'birja',
    loadChildren: () => import('../pages/birja/modules/birja.module').then(m => m.BirjaModule)

  },

  {
    path: 'members',
    loadChildren: () => import('../pages/members/modules/members.module').then(m => m.MembersModule)

  },

  {
    path: 'agronoms',
    loadChildren: () => import('../pages/agronoms/modules/agronoms.module').then(m => m.AgronomsModule)
  },

  {
    path: 'news',
    loadChildren: () => import('../pages/news/modules/news.module').then(m => m.NewsModule)
  }

];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})

export class AppRoutingModule { }
