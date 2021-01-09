<?php
                                                                            if ($status == 1) {
                                                                                $nomor = 0;
                                                                                foreach ($detail as $data):
                                                                                $nomor++;
                                                                                ?>
                                                                                    <tr id="deletedataku<?php echo $data->id?>">
                                                                                         <td>
                                                                                            <?php echo $data->Namabuku; ?>
                                                                                            
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $data->harga ?>
                                                                                        </td>
                                                                                        <td>
                                                                                        <?php echo $data->qty?>
                                                                                      
                                                                                        </td>
                                                                                        <td>
                                                                                            <?php echo $data->total ?>
                                                                                        </td>
                                                                                      
                                                                                       
                                                                                       
                                                                                        <td style="text-align:center;">
                                                                                            <a onclick="modalqtyku(<?php echo $data->idbuku; ?>,<?php echo $data->qty; ?>)" data-toggle="tooltip" data-toggle="modal" data-target="#modalqty" data-placement="bottom" title="Edit Qty"
                                                                                            class="btn btn-small btn-outline-primary" ><i class="icofont icofont-pen-alt-4"></i> Edit</a>
                                                                                            <a onclick="" href="#" data-toggle="tooltip" onclick="modalhapusbeli()"  data-toggle="modal" data-target="#hapusbeli" data-placement="bottom" title="Hapus Pembelian" class="btn btn-small btn-outline-danger"><i class="icofont icofont-trash"></i> Hapus</a>
                                                                                    
                                                                                        </td>
                                                                                    </tr>
                                                                                    <?php endforeach; 
                                                                            }
                                                                        ?>