import { TestBed } from '@angular/core/testing';

import { AgronomsService } from './agronoms.service';

describe('AgronomsService', () => {
  beforeEach(() => TestBed.configureTestingModule({}));

  it('should be created', () => {
    const service: AgronomsService = TestBed.get(AgronomsService);
    expect(service).toBeTruthy();
  });
});
