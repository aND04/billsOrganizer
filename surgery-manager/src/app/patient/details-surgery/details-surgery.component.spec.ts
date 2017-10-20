import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { DetailsSurgeryComponent } from './details-surgery.component';

describe('DetailsSurgeryComponent', () => {
  let component: DetailsSurgeryComponent;
  let fixture: ComponentFixture<DetailsSurgeryComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ DetailsSurgeryComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(DetailsSurgeryComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
