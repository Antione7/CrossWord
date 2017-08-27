import {NgModule} from '@angular/core';
import {SharedModule} from '../shared/shared.module';

import {GameComponent} from './game.component';
import {GameRoutingModule} from './game-routing.module';

import {GameService} from './shared/game.service';

@NgModule({
    imports: [SharedModule, GameRoutingModule],
    declarations: [
        GameComponent
    ],
    providers: [GameService]
})
export class GameModule {}
