import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AdminComponent } from './admin.component';
import { AdminDashboardComponent } from './admin-dashboard/admin-dashboard.component';
import {AdminRoutingModule} from './admin-routing.module';
import { SchoolYearComponent } from './school-year/school-year.component';

@NgModule({
  imports: [
    CommonModule,
    AdminRoutingModule
  ],
  declarations: [AdminComponent, AdminDashboardComponent, SchoolYearComponent]
})
export class AdminModule { }
