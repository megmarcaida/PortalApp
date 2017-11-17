import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
import { PortalComponent } from './portal/portal.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';

const appRoutes :Routes = [
   { path: 'portal', component: PortalComponent},
   { path: 'about', component: AboutComponent },
   { path: 'contact', component: ContactComponent }
];


@NgModule({
  declarations: [
    AppComponent,
    PortalComponent,
    AboutComponent,
    ContactComponent
  ],
  imports: [
    BrowserModule,
    RouterModule.forRoot(
       appRoutes,
       { enableTracing: true } // <-- debugging purposes only
     )
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
