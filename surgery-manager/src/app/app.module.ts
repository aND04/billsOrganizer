import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from "angular2-materialize";

import { AppComponent } from './app.component';
import { DashboardComponent } from './dashboard/dashboard/dashboard.component';

import { ListAppointmentsComponent } from './appointment/list-appointments/list-appointments.component';
import { DetailsAppointmentComponent } from './appointment/details-appointment/details-appointment.component';
import { AddAppointmentComponent } from './appointment/add-appointment/add-appointment.component';

import { ListClinicsComponent } from './clinic/list-clinics/list-clinics.component';
import { DetailsClinicComponent } from './clinic/details-clinic/details-clinic.component';
import { AddClinicComponent } from './clinic/add-clinic/add-clinic.component';
import { GlobalDirectiveDirective } from './global/global-directive.directive';

import { ListPatientsComponent } from './patient/list-patients/list-patients.component';
import { DetailsPatientComponent } from './patient/details-patient/details-patient.component';
import { AddPatientComponent } from './patient/add-patient/add-patient.component';

import { ListSurgeriesComponent } from './patient/list-surgeries/list-surgeries.component';
import { DetailsSurgeryComponent } from './patient/details-surgery/details-surgery.component';
import { AddSurgeryComponent } from './patient/add-surgery/add-surgery.component';

@NgModule({
  declarations: [
    AppComponent,
    ListAppointmentsComponent,
    DetailsAppointmentComponent,
    AddAppointmentComponent,
    ListClinicsComponent,
    DetailsClinicComponent,
    AddClinicComponent,
    DashboardComponent,
    GlobalDirectiveDirective,
    ListPatientsComponent,
    DetailsPatientComponent,
    AddPatientComponent,
    ListSurgeriesComponent,
    DetailsSurgeryComponent,
    AddSurgeryComponent,
  ],
  imports: [
    MaterializeModule,
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
