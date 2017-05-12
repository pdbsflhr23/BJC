<?php

namespace App\Http\Controllers\Node;

use App\MODEL\Node;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NodeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * ========================================================================================================= *
     *                                   Add and View of All Nodes
     * ========================================================================================================= *
     */

    public function view()
    {
        $nodes = Node::orderBy('id', 'desc')->paginate(20);

        return view('template\node\nodes', compact('nodes'));
    }
    /**
     * ========================================================================================================= *
     *                                   Edit Nodes
     * ========================================================================================================= *
     */

    public function edit($id)
    {
        return Node::findOrFail($id);
    }
    /**
     * ========================================================================================================= *
     *                                   Store New Node
     * ========================================================================================================= *
     */

    public function store(Request $request)
    {

        $last = Node::orderBy('id', 'desc')->select('id')->first();
        $latest = $last->id + 1;
        if ($latest < 10) { $node = '00'.$latest; }
        if ($latest > 9 && $latest < 100) { $node = '0'.$latest; }
        if ($latest > 99) { $node = $latest; }
        $noding = 'ND'.$node;

        $node = new Node();
        $node->code        = $noding;
        $node->name        = $request->name;
        $node->gpse        = $request->gpse;
        $node->gpsn        = $request->gpsn;
        $node->ip          = $request->ipaddress;
        $node->save();

    }
    /**
     * ========================================================================================================= *
     *                                   Edit Node
     * ========================================================================================================= *
     */

    public function update(Request $request)
    {
        $node = Node::findOrFail($request->id);
        $node->name        = $request->name;
        $node->gpse        = $request->gpse;
        $node->gpsn        = $request->gpsn;
        $node->ip          = $request->ipaddress;
        $node->save();
    }

    /**
     * ========================================================================================================= *
     *                                   Delete Node
     * ========================================================================================================= *
     */

    public function destroy($id)
    {
        $node = Node::findOrFail($id);
        $node->delete();
    }

}
