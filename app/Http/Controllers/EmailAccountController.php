<?php

namespace App\Http\Controllers;

use App\Models\EmailAccount;
use Illuminate\Http\Request;

class EmailAccountController extends Controller
{
    public function index()
	{
		$emailAccounts = EmailAccount::all();
		return view('email_accounts.index', compact('emailAccounts'));
	}

    public function create()
    {
        return view('email_accounts.create');
    }

    public function store(Request $request)
    {
        EmailAccount::create($request->all());
        return redirect()->route('email_accounts.index');
    }

    public function show(EmailAccount $emailAccount)
    {
        return view('email_accounts.show', compact('emailAccount'));
    }

    public function edit(EmailAccount $emailAccount)
    {
        return view('email_accounts.edit', compact('emailAccount'));
    }

    public function update(Request $request, EmailAccount $emailAccount)
    {
        $emailAccount->update($request->all());
        return redirect()->route('email_accounts.index');
    }

    public function destroy(EmailAccount $emailAccount)
    {
        $emailAccount->delete();
        return redirect()->route('email_accounts.index');
    }
}
