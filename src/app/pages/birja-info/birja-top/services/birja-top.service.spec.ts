import { TestBed } from '@angular/core/testing';

import { BirjaTopService } from './birja-top.service';

describe('BirjaTopService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: BirjaTopService = TestBed.get(BirjaTopService);
    expect(service).toBeTruthy();
  });
});
