<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

use App\Models\Subscription;

class PlanController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        // create a subscription
        try {
            $subscription = $request->user()->newSubscription($request->name, $plan->stripe_plan)
                ->create($request->token);

            // Redirect to a success page
            return redirect()->route('subscription.success');
        } catch (\Exception $e) {
            // Handle errors, possibly return to the form with error messages
            return redirect()->route('subscription.success')->withErrors(['msg' => $e->getMessage()]);
        }
    }
}
