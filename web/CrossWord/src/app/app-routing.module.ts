import {NgModule} from '@angular/core';
import {Routes, RouterModule} from '@angular/router';

export const routes: Routes = [
    {path: '', redirectTo: 'game', pathMatch: 'full'},
    {path: 'game', loadChildren: 'app/game/game.module#GameModule'}
];

@NgModule({
    imports: [RouterModule.forRoot(routes)],
    exports: [RouterModule]
})
export class AppRoutingModule {}