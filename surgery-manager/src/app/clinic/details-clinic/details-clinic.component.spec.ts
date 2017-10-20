import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailsClinicComponent } from './details-clinic.component';

describe('DetailsClinicComponent', () => {
  let component: DetailsClinicComponent;
  let fixture: ComponentFixture<DetailsClinicComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DetailsClinicComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DetailsClinicComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
